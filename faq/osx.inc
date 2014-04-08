<?php
include_once("$topdir/software/ompi/current/version.inc");

$q[] = "How does Open MPI handle HFS+ / UFS filesystems?";

$anchor[] = "filesystems";

$a[] = "Generally, Open MPI does not care whether it is running from
an HFS+ or UFS filesystem.  However, the C++ wrapper compiler historically
has been called <code>mpiCC</code>, which of course is the same file
as <code>mpicc</code> when running on HFS+.  During the <code>configure</code>
process, Open MPI will attempt to determine if the build filesystem is
case sensitive or not, and assume the install file system is the same
way.  Generally, this is all that is needed to deal with HFS+.

However, if you are building on UFS and installing to HFS+, you should
specify <code>--without-cs-fs</code> to configure to make sure Open 
MPI does not build the <code>mpiCC</code> wrapper.  Likewise, if you
build on HFS+ and install to UFS, you may want to specify
<code>--with-cs-fs</code> to ensure that <code>mpiCC</code> is
installed.
";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I use the Open MPI wrapper compilers in XCode?";

$anchor[] = "xcode";

$a[] = "
XCode has a non-public interface for adding compilers to XCode.  A
friendly Open MPI user sent in configuration file for XCode 2.3, 
<A HREF=\"MPICC.pbcompspec\">MPICC.pbcompspec</A>, which will add
support for the Open MPI wrapper compilers.  The file should be
placed in <code>/Library/Application Support/Apple/Developer Tools/Specifications/</code>.  Upon starting XCode, this file is loaded and added to the list of
known compilers.

To use the <code>mpicc</code> compiler, open the project, get info on the
target, click the rules tab, and add a new entry.  Change the process rule
for \"C source files\" and select using MPICC.

Before moving the file, the <code>ExecPath</code> parameter should be set
to the location of the Open MPI install.  The <code>BasedOn</code> parameter
should be updated to refer to the compiler version that <code>mpicc</code>
will invoke -- generally <code>gcc-4.0</code> on OS X 10.4 machines.

Thanks to Karl Dockendorf for this information.
";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I run jobs under XGrid?";

$anchor[] = "xgrid-howto";

$a[] = "XGrid support is included in Open MPI and will be build if the
XGrid tools are installed.

We unfortunately have little documentation on how to run with XGrid at
this point other than a fairly lengthy e-mail that Brian Barrett wrote
on the Open MPI user's mailing list:

<div align=center>
<a href=\"http://www.open-mpi.org/community/lists/users/2006/01/0539.php\">http://www.open-mpi.org/community/lists/users/2006/01/0539.php</a>
</div>

Since Open MPI 1.1.2, we also support authentication using Kerberos.
The process is essentially the same, but there is no need to specify
the XGRID_PASSWORD field.  Open MPI applications will then run as
the authenticated user, rather than <code>nobody</code>.
";

/////////////////////////////////////////////////////////////////////////

$q[] = "Where do I get more information about running under XGrid?";

$anchor[] = "xgrid-more-info";

$a[] = "Please write to us on the <a href=\"$topdir/community/lists/ompi.php\">user's mailing list</a>.  Hopefully any
replies that we send will contain enough information to create proper
FAQ's about how to use Open MPI with XGrid.";

/////////////////////////////////////////////////////////////////////////

$q[] = "Is Open MPI included in OS X?";

$anchor[] = "osx-bundled-ompi";

$a[] = "Open MPI v1.2.3 was included in OS X starting with version 10.5
(Leopard).  Note that the Leopard does not include a Fortran compiler,
so the OS X-shipped version of Open MPI does not include Fortran
support.

If you need/want Fortran support, you will need to build your own copy
of Open MPI (assumedly when you have a Fortran compiler installed).
The Open MPI team strongly recomends *not* overwriting the OS
X-installed version of Open MPI, but rather installing it somewhere
else (e.g., [/opt/openmpi]).";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I <em>not</em> use the OS X-bundled Open MPI?";

$anchor[] = "not-using-osx-bundled-ompi";

$a[] = "There are a few reasons you might not want to use the OS
X-bundled Open MPI, such as wanting Fortran support, upgrading to a
new version, etc.

If you wish to use a community version of Open MPI, You can download
and build Open MPI on OS X just like any other supported platform.  We
*strongly* recomend *not* replacing the OS X-installed Open MPI, but
rather installing to an alternate location (such as [/opt/openmpi]).

Once you successfully install Open MPI, <a
href=\"?category=running#run-prereqs\">ensure to prefix your [PATH]
with the bindir of Open MPI</a>.  This will ensure that you are using
your newly-installed Open MPI, not the OS X-installed Open MPI.  For
example:

<faqcode>
# Not showing the complete URL/tarball name because it changes over time :-)
shell$ wget http://www.open-mpi.org/.../open-mpi....
shell$ tar zxf openmpi-...gz
shell$ cd openmpi-...
shell$ ./configure --prefix=/opt/openmpi 2>&1 | tee config.out
[...lots of output...]
shell$ make -j 4 2>&1 | tee make.out
[...lots of output...]
shell$ sudo make install 2>&1 | tee install.out
[...lots of output...]
shell$ export PATH=/opt/openmpi/bin:\$PATH
shell$ ompi_info
[...see output from newly-installed Open MPI...]
</faqcode>

Of course, you'll want to make your [PREFIX] changes permanent.  One
way to do this is to <a
href=\"?category=running#adding-ompi-to-path\">edit your shell startup
files</a>.

Note that there is no need to add Open MPI's libdir to
[LD_LIBRARY_PATH]; Open MPI's shared library build process
automatically uses the \"rpath\" mechanism to automatically find the
correct shared libraries (i.e., the ones associated with this build,
vs., for example, the OS X-shipped OMPI shared libraries).  Also note
that we specifically do *not* recommend adding Open MPI's libdir to
[DYLD_LIBRARY_PATH].

If you build static libraries for Open MPI, there is an ordering
problem such that [/usr/lib/libmpi.dylib] will be found before
[\$libdir/libmpi.a], and therefore user-linked MPI applications that
use [mpicc] (and friends) will use the \"wrong\" libmpi.  This can be
fixed by <a
href=\"?category=mpi-apps#override-wrappers-after-v1.0\">editing
OMPI's wrapper compilers</a> to force the use of the Right libraries,
such as with the following flag when configuring Open MPI:

<faqcode>
shell$ ./configure --with-wrapper-ldflags=\"-Wl,-search_paths_first\" ...
</faqcode>";
