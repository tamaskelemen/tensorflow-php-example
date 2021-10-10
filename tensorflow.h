#define FFI_SCOPE "TensorFlow"
#define FFI_LIB "libtensorflow.so.2"

// TF_Version returns a string describing version information of the
// TensorFlow library. TensorFlow using semantic versioning.
extern const char* TF_Version();

