<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May  2 10:42:14 2006" -->
<!-- isoreceived="20060502144214" -->
<!-- sent="Tue, 2 May 2006 10:42:11 -0400" -->
<!-- isosent="20060502144211" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] fortran mpi io malloc error" -->
<!-- id="AEAF7E1D-5AA1-4ADE-8897-F3ABF02D6A10_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="220e12410604281039n63a0fff8h8f1ce041059dad6_at_mail.gmail.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-02 10:42:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1194.php">George Bosilca: "Re: [OMPI users] OpenMPI TCP no-route-to-host error"</a>
<li><strong>Previous message:</strong> <a href="1192.php">Douglas Kojetin: "Re: [OMPI users] C++ problem with ./configure using Intel version 9.0"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/04/1164.php">Bernard Knaepen: "[OMPI users] fortran mpi io malloc error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1195.php">Bernard Knaepen: "Re: [OMPI users] fortran mpi io malloc error"</a>
<li><strong>Reply:</strong> <a href="1195.php">Bernard Knaepen: "Re: [OMPI users] fortran mpi io malloc error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 28, 2006, at 1:39 PM, Bernard Knaepen wrote:
<br>
<p><span class="quotelev1">&gt; I am trying to install/run open-mpi on a Macbook Pro running MacOSX
</span><br>
<span class="quotelev1">&gt; 10.4.6, *with* fortran support.
</span><br>
<span class="quotelev1">&gt; I am using Intel Fortran Compiler 9.1 (professional edition).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Compilation/installation went fine, except that the ifort compiler was
</span><br>
<span class="quotelev1">&gt; not recognized as the f90 compiler by the romio configure script.
</span><br>
<span class="quotelev1">&gt; Therefore, I explicitely set the F90 compiler to ifort in the romio
</span><br>
<span class="quotelev1">&gt; configure script.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I try to run the following simple mpi/io program,
</span><br>
<p>It appears that we don't properly handle string arguments in the  
<br>
Fortran bindings for the MPI-IO functions.  I've committed a fix for  
<br>
this issue in our development trunk this morning.  It should be  
<br>
included in both the upcoming 1.0.3 and 1.1 releases.  Unfortunately,  
<br>
I can't think of a workaround to the issue.  If you are interested, I  
<br>
can let you know when the patch has been pushed in our v1.0 release  
<br>
branch and is available in our nightly snapshots of v1.0.3 (which are  
<br>
generally quite stable).
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1194.php">George Bosilca: "Re: [OMPI users] OpenMPI TCP no-route-to-host error"</a>
<li><strong>Previous message:</strong> <a href="1192.php">Douglas Kojetin: "Re: [OMPI users] C++ problem with ./configure using Intel version 9.0"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/04/1164.php">Bernard Knaepen: "[OMPI users] fortran mpi io malloc error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1195.php">Bernard Knaepen: "Re: [OMPI users] fortran mpi io malloc error"</a>
<li><strong>Reply:</strong> <a href="1195.php">Bernard Knaepen: "Re: [OMPI users] fortran mpi io malloc error"</a>
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
