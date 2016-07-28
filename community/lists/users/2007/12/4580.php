<?
$subject_val = "Re: [OMPI users] Suggestions on multi-compiler/multi-mpi build?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  3 09:06:55 2007" -->
<!-- isoreceived="20071203140655" -->
<!-- sent="Mon, 03 Dec 2007 08:42:36 -0500" -->
<!-- isosent="20071203134236" -->
<!-- name="Katherine Holcomb" -->
<!-- email="kholcomb_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Suggestions on multi-compiler/multi-mpi build?" -->
<!-- id="1196689356.26220.9.camel_at_shavano.itc.virginia.edu" -->
<!-- inreplyto="df8c8a6d0711301905o1283ad42m23cae2db4133151d_at_mail.gmail.com" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> Re: [OMPI users] Suggestions on multi-compiler/multi-mpi build?<br>
<strong>From:</strong> Katherine Holcomb (<em>kholcomb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-03 08:42:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4581.php">Rolf vandeVaart: "Re: [OMPI users] large number of processes"</a>
<li><strong>Previous message:</strong> <a href="4579.php">hbtcx243_at_[hidden]: "[OMPI users] large number of processes"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/11/4570.php">Jim Kusznir: "Re: [OMPI users] Suggestions on multi-compiler/multi-mpi build?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/11/4482.php">Brock Palen: "Re: [OMPI users] Suggestions on multi-compiler/multi-mpi build?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 2007-11-30 at 19:05 -0800, Jim Kusznir wrote:
<br>
<span class="quotelev1">&gt; Thank you for your response!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just to clarify some things for my understanding:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do users load a single module that specifies both compiler and mpi
</span><br>
<span class="quotelev1">&gt; version (as opposed to loading two different modules, one for
</span><br>
<span class="quotelev1">&gt; complier, and one for mpi)?
</span><br>
<p>We combine compiler and MPI because it's necessary that the
<br>
mpifcc/cxx/f90 be compatible with the compiler, so the correct compiler
<br>
needs to be in the user's path, and it's just easier on the users to
<br>
have them load a single module.  A module can load another module, so if
<br>
you create a module for, say, the PGI compilers, the appropriate OpenMPI
<br>
module can load that module itself.
<br>
<p>Here's an example, my ompi-pgi script (note: all my scripts were cribbed
<br>
from old ROCKS scripts; ROCKS doesn't include modules by default anymore
<br>
but they used to provide it):
<br>
<p><p>#%
<br>
Module3.0#####################################################################
<br>
##
<br>
## CRAYfw mpich
<br>
##
<br>
proc ModulesHelp { } {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;global version MPIhome
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;puts stderr &quot;\tCRAY freeware: OpenMPI\n&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;puts stderr &quot;\tThis module loads the lastest versions of OpenMPI.\n&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;puts stderr &quot;\n\tThis adds $OpenMPI/* to several of the&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;puts stderr &quot;\tenvironment variables.&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;puts stderr &quot;\n\tVersion $version\n&quot;
<br>
}
<br>
<p>module-whatis   &quot;loads the OpenMPI environment for PGI over Ethernet&quot;
<br>
<p># for Tcl script use only
<br>
set     version         1.2
<br>
set     MPIhome         /opt/openmpi-1.2/ethernet/pgi
<br>
<p>prepend-path    PATH            $MPIhome/bin
<br>
prepend-path    INCLUDE         $MPIhome/include
<br>
prepend-path    INFOPATH        $MPIhome/share
<br>
prepend-path    LD_LIBRARY_PATH $MPIhome/lib
<br>
<p>setenv OMPI_MPIBIN $MPIhome
<br>
setenv OMPI_MPIHOME $MPIhome
<br>
setenv OMPI_MPIF77 &quot;pgf77&quot;
<br>
setenv OMPI_MPIF90 &quot;pgf90&quot;
<br>
setenv OMPI_MPICC  &quot;pgcc&quot;
<br>
setenv OMPI_MPICXX &quot;pgCC&quot;
<br>
<p>if [ module-info mode load ] {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if  {! [ is-loaded pgi ] } { module load pgi }
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if {  [ is-loaded ompi-pgi ] } { 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;puts stderr &quot;\tModule ompi-pgi already loaded\n&quot; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if {  [ is-loaded ompi-gnu ] } { 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;puts stderr &quot;\tModule ompi-gnu superceded\n&quot; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if {  [ is-loaded ompi-intel ] } { 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;puts stderr &quot;\tModule ompi-intel superceded\n&quot; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if {  [ is-loaded mpich-eth-pgi   ] } {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;puts stderr &quot;\tModule mpich-eth-pgi environment superceded.\n&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if {  [ is-loaded mpich-eth-gnu   ] } {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;puts stderr &quot;\tModule mpich-eth-gnu environment superceded.\n&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if {  [ is-loaded mpich-eth-intel   ] } {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;puts stderr &quot;\tModule mpich-eth-intel environment superceded.\n&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
}
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, if the MPI implementations need to be built separately for each
</span><br>
<span class="quotelev1">&gt; compiler, what about other software packages that users' link against?
</span><br>
<span class="quotelev1">&gt;  For example, as far as I know, there are not seperate versions of
</span><br>
<span class="quotelev1">&gt; libc for each compiler (but I may be ignorant here....please correct
</span><br>
<span class="quotelev1">&gt; me if I'm wrong).  How about other packages that code #includes?  How
</span><br>
<span class="quotelev1">&gt; do I know when something needs to be compiled separately vs one
</span><br>
<span class="quotelev1">&gt; version for everyone?
</span><br>
<p>We build a distinct version at least for every library that has F90/95
<br>
bindings.  Probably a good idea for C++ as well.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Another thing that I'm still not quite clear on:  Can I have all
</span><br>
<span class="quotelev1">&gt; versions of the various MPI libraries in the ld path at once (so the
</span><br>
<span class="quotelev1">&gt; user doesn't have to &quot;select&quot; the correct one somehow prior to code
</span><br>
<span class="quotelev1">&gt; execution)?
</span><br>
<p>I'll let somebody who is more of a real system administrator answer
<br>
that.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are there any tricks to building/installing all this stuff in a fairly
</span><br>
<span class="quotelev1">&gt; automated manner?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>We use ROCKS.  You have to create an rpm for everything, but once you do
<br>
then propagating it is automated.
<br>
<p><pre>
-- 
Katherine Holcomb, Ph.D.                kholcomb_at_[hidden]
Research Computing Support Group - ITC  Office Phone: (434) 982-5948
I046 BSEL, Clark Hall                    Center Phone: (434) 243-8799
University of Virginia 22904            
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4581.php">Rolf vandeVaart: "Re: [OMPI users] large number of processes"</a>
<li><strong>Previous message:</strong> <a href="4579.php">hbtcx243_at_[hidden]: "[OMPI users] large number of processes"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/11/4570.php">Jim Kusznir: "Re: [OMPI users] Suggestions on multi-compiler/multi-mpi build?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/11/4482.php">Brock Palen: "Re: [OMPI users] Suggestions on multi-compiler/multi-mpi build?"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
