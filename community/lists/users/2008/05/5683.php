<?
$subject_val = "Re: [OMPI users] Replace 1.2.3 with 1.2.6";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 16 12:00:46 2008" -->
<!-- isoreceived="20080516160046" -->
<!-- sent="Fri, 16 May 2008 12:00:36 -0400" -->
<!-- isosent="20080516160036" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Replace 1.2.3 with 1.2.6" -->
<!-- id="097B8EEB-B465-4C33-BF7F-2B6A5CCB9D46_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="637641.82793.qm_at_web57611.mail.re1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Replace 1.2.3 with 1.2.6<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-16 12:00:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5684.php">Jeff Squyres: "Re: [OMPI users] compiling from source from svn"</a>
<li><strong>Previous message:</strong> <a href="5682.php">Jeff Squyres: "Re: [OMPI users] Compiler Choice in openmpi"</a>
<li><strong>In reply to:</strong> <a href="5677.php">Francesco Pietra: "[OMPI users] Replace 1.2.3 with 1.2.6"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 16, 2008, at 5:06 AM, Francesco Pietra wrote:
<br>
<p><span class="quotelev1">&gt; Having (as a non-expert) to compile new versions of applications  
</span><br>
<span class="quotelev1">&gt; (Amber10 primarily), I have taken the opportunity to upgrade Intel  
</span><br>
<span class="quotelev1">&gt; compilers to version 10.1 (and MKL libraries) and now I plan also to  
</span><br>
<span class="quotelev1">&gt; upgrade openmpi from 1.2.3 to 1.2.6. To this concern please see the  
</span><br>
<span class="quotelev1">&gt; answer by Tim Prins (tprins_at_[hidden])
</span><br>
<span class="quotelev1">&gt; Date: 2007-09-26 18:26:25
</span><br>
<span class="quotelev1">&gt; to my former general question about upgrading:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you want to replace your current installation of Open MPI, you  
</span><br>
<span class="quotelev2">&gt;&gt; have 3
</span><br>
<span class="quotelev2">&gt;&gt; options:
</span><br>
<span class="quotelev2">&gt;&gt; 1. Install the new version exactly as you did the old version,  
</span><br>
<span class="quotelev2">&gt;&gt; overwriting &gt;the old version. This should work, but can lead to  
</span><br>
<span class="quotelev2">&gt;&gt; problems if there are &gt;any stale files left over. Thus I would  
</span><br>
<span class="quotelev2">&gt;&gt; recommend not doing this and doing &gt;one of the following.
</span><br>
<span class="quotelev2">&gt;&gt; 2. If you still have the build tree you used to originally install  
</span><br>
<span class="quotelev2">&gt;&gt; Open &gt;MPI, go into the build tree and type 'make uninstall'. This  
</span><br>
<span class="quotelev2">&gt;&gt; should remove &gt;all the old Open MPI files and allow you to install  
</span><br>
<span class="quotelev2">&gt;&gt; the new version &gt;normally.
</span><br>
<span class="quotelev2">&gt;&gt; 3. If you installed Open MPI into a unique prefix, such as /opt/ 
</span><br>
<span class="quotelev2">&gt;&gt; openmpi, &gt;just delete the directory and then install the new  
</span><br>
<span class="quotelev2">&gt;&gt; version of Open MPI.
</span><br>
<span class="quotelev2">&gt;&gt; Personally, I think that one should always install Open MPI into a  
</span><br>
<span class="quotelev3">&gt;&gt; &gt;directory where nothing else is installed, as it makes management  
</span><br>
<span class="quotelev2">&gt;&gt; and &gt;upgrading significantly easier.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I still have /usr/local/openmpi-1.2.3 which is
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4 drwxrwxrwx 10 10254 11000
</span><br>
<p>&nbsp;From your text, it sounds like this is the source code directory  
<br>
(i.e., where you expanded the Open MPI tarball).  If that is the case,  
<br>
and it's still the same as after you ran &quot;make install&quot; to install  
<br>
Open MPI, then you should probably follow #2 of Tim's options:
<br>
<p>cd /usr/local/openmpi-1.2.3
<br>
make uninstall
<br>
<p>This will remove the Open MPI installation from your system.
<br>
<p><span class="quotelev1">&gt; (the last two figures stand for me as user) from which I carried out  
</span><br>
<span class="quotelev1">&gt; the compilation.
</span><br>
<span class="quotelev1">&gt; /usr/local/bin contains:
</span><br>
<span class="quotelev1">&gt; mpic++
</span><br>
<span class="quotelev1">&gt; mpicc
</span><br>
<span class="quotelev1">&gt; mpiCC
</span><br>
<span class="quotelev1">&gt; mpicxx
</span><br>
<span class="quotelev1">&gt; mpiexec
</span><br>
<span class="quotelev1">&gt; mpif77
</span><br>
<span class="quotelev1">&gt; mpif90
</span><br>
<span class="quotelev1">&gt; mpirun
</span><br>
<span class="quotelev1">&gt; ompi_info
</span><br>
<span class="quotelev1">&gt; orted
</span><br>
<span class="quotelev1">&gt; orterun
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; are these overwritten during the new compilation, or some deletion  
</span><br>
<span class="quotelev1">&gt; is needed?
</span><br>
<p>They are overwritten.
<br>
<p>However, OMPI makes not guarantee about its plugins between versions  
<br>
-- the concern is that you may get some stale plugins if they are not  
<br>
overwritten by the new version.  That's what Tim was specifically  
<br>
referring to.
<br>
<p>&nbsp;From 1.2.3 -&gt; 1.2.6 you should be ok (everything should overwrite),  
<br>
but it's better to get in the habit of uninstalling / removing and  
<br>
then installing a new one.
<br>
<p><span class="quotelev1">&gt; If I understand, the above procedure (3) applies. Therefore, just  
</span><br>
<span class="quotelev1">&gt; delete /open.mpi-1.2.3 and start with decompressing the new release  
</span><br>
<span class="quotelev1">&gt; into
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.2.6
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and operate as before.
</span><br>
<p>Yes and no.  It looks like /usr/local/openmpi-1.2.3 is your *source*  
<br>
directory, not your *installation* directory.  So just removing /usr/ 
<br>
local/openmpi-1.2.3 is not sufficient.  You should &quot;make uninstall&quot;  
<br>
first and then you can remove /usr/local/openmpi-1.2.3.
<br>
<p><span class="quotelev1">&gt; What about libnuma,that I had also insalled
</span><br>
<span class="quotelev1">&gt; apt-get install libnuma-dev, which installed
</span><br>
<span class="quotelev1">&gt; libnuma-dev libnuma.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is a self-assembled, NUMA-type four sockets dual-opteron  
</span><br>
<span class="quotelev1">&gt; machine with Debian Linux amd64 lenny (the two raid1 HHD just moved  
</span><br>
<span class="quotelev1">&gt; to this mainboard from a previous mainbosrd with only two sockets.  
</span><br>
<span class="quotelev1">&gt; Everything OK with few adjustments).
</span><br>
<p>OMPI *uses* libnuma, but we're not responsible for it.  So if you've  
<br>
installed it via apt-get, that should be fine.  I don't know if  
<br>
there's an update available or not -- I'm guessing that OMPI 1.2.6  
<br>
will use your current version of libnuma just like OMPI 1.2.3.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5684.php">Jeff Squyres: "Re: [OMPI users] compiling from source from svn"</a>
<li><strong>Previous message:</strong> <a href="5682.php">Jeff Squyres: "Re: [OMPI users] Compiler Choice in openmpi"</a>
<li><strong>In reply to:</strong> <a href="5677.php">Francesco Pietra: "[OMPI users] Replace 1.2.3 with 1.2.6"</a>
<!-- nextthread="start" -->
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
