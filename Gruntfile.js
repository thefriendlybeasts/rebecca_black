module.exports = function(grunt) {
  // Load required modules.
  expandHomeDir = require('expand-home-dir');


  // Load the config files.
  var meerkat = grunt.file.readYAML('meerkat/meerkat.yaml');

  if (grunt.file.exists('meerkat/meerkat.preferences.yaml')) {
    var meerkatPrefs = grunt.file.readYAML('meerkat/meerkat.preferences.yaml');
  } else {
    var meerkatPrefs = {};

    // Inform user that they can tweak some preferences.
    grunt.log.subhead('Meerkat');
    grunt.log.writeln('-------');
    grunt.log.writeln(
      'You can set personal preferences for things like which browser to use during development ' +
      'in `meerkat/meerkat.preferences.yaml`. See `meerkat/meerkat.preferences.yaml.sample`.'
    );
  }

  meerkat           = mergeObjects(meerkat, meerkatPrefs);
  meerkat.sitesPath = expandHomeDir('~/Sites');


  require('load-grunt-config')(grunt, {
    configPath: 'meerkat/tasks',
    config: {
      m: meerkat
    }
  });
};





// ---





/**
 * Recursively merge the properties of two objects into the first, then return
 * the object.
 * @param {object} obj1 The first object.
 * @param {object} obj2 The second object.
 */
function mergeObjects(obj1, obj2) {

  for (var p in obj2) {
    try {
      // Property in destination object set; update its value.
      if (obj2[p].constructor == Object) {
        obj1[p] = mergeObjects(obj1[p], obj2[p]);

      } else {
        obj1[p] = obj2[p];

      }

    } catch(e) {
      // Property in destination object not set; create it and set its value.
      obj1[p] = obj2[p];

    }
  }

  return obj1;
}
