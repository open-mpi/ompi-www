<?php
  $topdir = "../../..";
  include_once("version.inc");

  $title = "Open MPI: Version $release_version Windows Binary Installer Notes";
  include_once("$topdir/software/ompi/nav.inc");
  include_once("$topdir/includes/header.inc");
  include_once("$topdir/includes/curl_get.inc");

  include_once("$topdir/includes/downloads.inc");

?>

<p>This is the first binary release for Windows, with basic MPI
libraries and executables.  The supported platforms are
<strong>Windows XP, Windows Vista, Windows Server 2003/2008, and
Windows 7</strong> (including both 32 and 64 bit versions).</p>

<p>The Compute Cluster Package (CCP) and the HPC pack support, which
provides the integration of Open MPI with Job Scheduler (aka Job
Management), is only available in 64 bit version, and it's checked and
loaded at runtime when the package is available on the system.</p>

<p>By default, the installer will create an OpenMPI folder under
%ProgramFiles% on 32 bit Windows, but under %ProgramFiles(x86)% on 64
bit, no matter which version of Open MPI it is, because the installer
is generated via NSIS, which only creates 32 bit installers, and 64
bit system will redirect the installation to the x86 paths, as well as
the registry entries. But this won't be a problem for using it, and it
is possible to change the default installation path during the
installation. We will fix this in the future releases.</p>

<p>The installer contains the basic executables for compiling and
running MPI applications:

<p>
<ul> 
<li><code>mpicc.exe</code>: C compiler wrapper</li>
<li><code>mpicxx.exe, mpic++.exe</code>: C++ compiler wrapper</li>
<li><code>mpirun.exe, mpiexec.exe, orterun.exe</code>: for starting MPI applications</li>
<li><code>orted.exe</code>: ORTE daemon (an internal daemon for Open MPI), for managing remote processes</li>
<li><code>ompi_info.exe</code>: prints the Open MPI installation information</li>
</ul>
</p>

<p>These are the main Open MPI libraries:</p>

<p>
<ul>
<li><code>libmpi.dll</code>: MPI C library</li>
<li><code>libmpi_cxx.dll</code>: MPI C++ library</li>
<li><code>libopen-pal.dll</code>: OPAL (Open Portable Access Layer) library</li>
<li><code>libopen-rte.dll</code>: ORTE (Open MPI Runtime Environment)
library</li>
</ul>
</p>

<p>The debug version of the above libraries are also provided, but
with a suffix "d".  For example, <code>libmpid.dll</code> is the debug
version of <code>libmpi.dll</code>. For the users who want to debug
deeply into Open MPI libraries, the Program Database (PDB) files can
also be found in the same directory of the DLL files, but in order to
use the PDB files, the corresponding source files are also required.</p>

<p>The structure of the installed directories are basically the same
as Open MPI on POSIX platforms :</p>

<p>
<ul>
<li><code>bin</code>: executables, dynamically linked libraries, and PDB files</li>
<li><code>include</code>: include headers, e.g., <code>mpi.h</code></li>
<li><code>lib</code>: object file Libraries</li>
<li><code>share</code>: text files for wrapper inputs and help
outputs</li>
</ul>
</p>

<?php 
  include_once("$topdir/includes/footer.inc");
