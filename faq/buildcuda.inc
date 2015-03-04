<?php

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I build Open MPI with CUDA-aware support?";

$anchor[] = "build-cuda";

$a[] = "CUDA-aware support means that the MPI library can send and receive GPU buffers
directly.  This feature exists in the Open MPI 1.7 series and later.  The support
is being continuously updated so different levels of support exist in different
versions.  We recommend you use the latest 1.8 version for best support.

*Configuring the Open MPI 1.8 series and Open MPI 1.7.3, 1.7.4, 1.7.5*

With Open MPI 1.7.3 and later the libcuda.so library is loaded dynamically
so there is no need to specify a path to it at configure time.  Therefore,
all you need is the path to the cuda.h header file.

1. Searches in default locations.  Looks for cuda.h in
/usr/local/cuda/include.
<faqcode>
 ./configure --with-cuda
</faqcode>

2. Searches for cuda.h in /usr/local/cuda-v6.0/cuda/include.
<faqcode>
 ./configure --with-cuda=/usr/local/cuda-v6.0/cuda
</faqcode>

Note that you cannot configure with *--disable-dlopen* as that will
break the ability of the Open MPI library to dynamically load libcuda.so.

*Configuring Open MPI 1.7, MPI 1.7.1 and 1.7.2*

<faqcode>
  --with-cuda(=DIR)       Build cuda support, optionally adding DIR/include,
                          DIR/lib, and DIR/lib64
  --with-cuda-libdir=DIR  Search for cuda libraries in DIR
</faqcode>

Here are some examples of configure commands that enable CUDA support.

1. Searches in default locations.  Looks for cuda.h in
/usr/local/cuda/include and libcuda.so in /usr/lib64.
<faqcode>
 ./configure --with-cuda
</faqcode>

2. Searches for cuda.h in /usr/local/cuda-v4.0/cuda/include and libcuda.so in
default location of /usr/lib64.
<faqcode>
 ./configure --with-cuda=/usr/local/cuda-v4.0/cuda
</faqcode>

3. Searches for cuda.h in /usr/local/cuda-v4.0/cuda/include and
libcuda.so in /usr/lib64.  (same as previous one)
<faqcode>
 ./configure --with-cuda=/usr/local/cuda-v4.0/cuda --with-cuda-libdir=/usr/lib64
</faqcode>

If the cuda.h or libcuda.so files cannot be found, then the configure
will abort.

*Note:* There is a bug in Open MPI 1.7.2 such that you will get an
error if you configure the library with *--enable-static*.  To get
around this error, add the following to your configure line and
reconfigure.  This disables the build of the PML BFO which is largely
unused anyways.  This bug is fixed in Open MPI 1.7.3.
<faqcode>
 --enable-mca-no-build=pml-bfo
</faqcode>

See <a href=\"?category=running#mpi-cuda-support\">this FAQ entry</a>
for detals on how to use the CUDA support.";

/////////////////////////////////////////////////////////////////////////
