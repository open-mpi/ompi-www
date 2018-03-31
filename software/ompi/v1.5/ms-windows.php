<?php
  $topdir = "../../..";
  include_once("$topdir/software/ompi/v1.5/version.inc");

  $title = "Open MPI: Version $ver_v1_5 Windows Binary Installer Notes";
  include_once("$topdir/software/ompi/nav.inc");
  include_once("$topdir/includes/header.inc");
  include_once("$topdir/includes/curl_get.inc");

  include_once("$topdir/includes/downloads.inc");

?>

<p>This is the first binary release for Windows, with basic MPI
libraries and executables.  The supported platforms are
<strong>Windows XP, Windows Vista, Windows Server 2003/2008, and
Windows 7</strong> (including both 32 and 64 bit versions). The installers
were configured with CMake 2.8.1 and compiled under Visual Studio 2010, and they
support for C/C++ compilers of Visual Studio 2005, 2008 and 2010.</p>

<p>The Compute Cluster Package (CCP) and the HPC pack support, which
provides the integration of Open MPI with Job Scheduler (aka Job
Management), is only available in 64 bit version, and it's checked and
loaded at runtime when the package is available on the system.</p>

<p>In order to install Open MPI, user must have sufficient privileges.
By default, the installer will create an OpenMPI folder under
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

<table border="0">
<tr><td><li><code>mpicc.exe</code></li></td>                             <td> : C compiler wrapper</td></tr>
<tr><td><li><code>mpicxx.exe, mpic++.exe</code></li></td>                <td> : C++ compiler wrapper</td></tr>
<tr><td><li><code>mpif77.exe</code></li></td>                            <td> : F77 compiler wrapper</td></tr>
<tr><td><li><code>mpirun.exe, mpiexec.exe, orterun.exe</code></li></td>  <td> : execute serial and parallel jobs in Open MPI</td></tr>
<tr><td><li><code>orted.exe</code></li></td>                             <td> : ORTE daemon (an internal daemon for Open MPI), for managing remote processes</td></tr>
<tr><td><li><code>ompi_info.exe</code></li></td>                         <td> : display information about the Open MPI installation</td></tr>
<tr><td><li><code>ompi-ps.exe, orte-ps.exe</code></li></td>              <td> : Displays information about the active jobs and processes in Open MPI</td></tr>
<tr><td><li><code>opal-wrapper.exe</code></li></td>                      <td> : Back-end Open MPI wrapper command</td></tr>
<tr><td><li><code>ompi-clean.exe, orte-clean.exe</code></li></td>        <td> : Cleans up any stale processes and files leftover from Open MPI jobs</td></tr>
<tr><td><li><code>ompi-server.exe</code></li></td>                       <td> : Server for supporting name publish/lookup operations</td></tr>
</table>
</ul>
</p>

<p>These are the main Open MPI libraries:</p>

<p>
<ul>
<table border="0">
<tr><td><li><code>libmpi.dll</code></li></td>        <td> : MPI C library</td></tr>
<tr><td><li><code>libmpi_cxx.dll</code></li></td>    <td> : MPI C++ library</td></tr>
<tr><td><li><code>libmpi_f77.dll</code></li></td>    <td> : MPI F77 library</td></tr>
<tr><td><li><code>libopen-pal.dll</code></li></td>   <td> : OPAL (Open Portable Access Layer) library</td></tr>
<tr><td><li><code>libopen-rte.dll</code></li></td>   <td> : ORTE (Open MPI Runtime Environment)</td></tr>
</table>
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
<table border="0">
<tr><td><code>+---bin</code></td>                    <td> : executables, dynamically linked libraries, and PDB files</td></tr>
<tr><td><code>|&nbsp;&nbsp;&nbsp;+---libmpi.dll</code></td>         <td> : the main MPI DLL</td></tr>
<tr><td><code>|&nbsp;&nbsp;&nbsp;+---mpicc.exe</code></td>          <td> : C compiler wrapper</td></tr>
<tr><td><code>|&nbsp;&nbsp;&nbsp;+---...</code></td>                <td></td></tr>
<tr><td><code>+---include</code></td>                <td> : include headers</td></tr>
<tr><td><code>|&nbsp;&nbsp;&nbsp;+---mpi.h</code></td>              <td> : the main <code>mpi.h</code></td></tr>
<tr><td><code>+---lib</code></td>                    <td> : object file Libraries</td></tr>
<tr><td><code>|&nbsp;&nbsp;&nbsp;+---libmpi.lib</code></td>         <td> : MPI library that should be linked into MPI applications</td></tr>
<tr><td><code>|&nbsp;&nbsp;&nbsp;+---...</code></td>                <td></td></tr>
<tr><td><code>+---share</code></td>                  <td> : text files for wrapper inputs and help outputs</td></tr>
<tr><td><code>|&nbsp;&nbsp;&nbsp;+---openmpi</code></td>            <td></td></tr>
<tr><td><code>|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+---help-orted.txt</code></td> <td> : help file for orted.exe</td></tr>
<tr><td><code>|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+---...</code></td>            <td></td></tr>
<tr><td><code>+---uninstall.exe</code></td>          <td> : uninstall the package</td></tr>
</table>
</ul>
</p>

<p>Many thanks to Damien Hocking who helped us with Intel Fortran compiler 
issues in the Windows binaries.</p>

<?php 
  include_once("$topdir/includes/footer.inc");
