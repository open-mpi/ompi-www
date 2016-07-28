<?
$subject_val = "Re: [OMPI users] Mac Ifort and gfortran together";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 15 22:35:48 2010" -->
<!-- isoreceived="20101216033548" -->
<!-- sent="Wed, 15 Dec 2010 19:35:43 -0800" -->
<!-- isosent="20101216033543" -->
<!-- name="Doug Reeder" -->
<!-- email="dlr1_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mac Ifort and gfortran together" -->
<!-- id="9A0F0337-EEF3-4DEA-91CF-494A6F75C263_at_cox.net" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="15739149-3AE4-4150-9807-504EA3F6C2AF_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Mac Ifort and gfortran together<br>
<strong>From:</strong> Doug Reeder (<em>dlr1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-15 22:35:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15163.php">Gilbert Grosdidier: "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix"</a>
<li><strong>Previous message:</strong> <a href="15161.php">Tim Prince: "Re: [OMPI users] Mac Ifort and gfortran together"</a>
<li><strong>In reply to:</strong> <a href="15155.php">Jeff Squyres: "Re: [OMPI users] Mac Ifort and gfortran together"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/03/15855.php">David Robertson: "Re: [OMPI users] Mac Ifort and gfortran together"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>You may me bumping into conflicts between the apple supplied ompi and your mpi. I use modules to force my mpi to the front of the PATH and DYLD_LIBRARY_PATH variables.
<br>
<p>Doug Reeder
<br>
On Dec 15, 2010, at 5:22 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Sorry for the ginormous delay in replying here; I blame SC'10, Thanksgiving, and the MPI Forum meeting last week...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 29, 2010, at 2:12 PM, David Robertson wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm noticing a strange problem with Open MPI 1.4.2 on Mac OS X 10.6. We use both Intel Ifort 11.1 and gfortran 4.3 on the same machine and switch between them to test and debug code.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I had runtime problems when I compiled openmpi in my usual way of no shared libraries so I switched to shared and it runs now.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What problems did you have?  OMPI should work fine when compiled statically.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However, in order for it to work with ifort I ended up needing to add the location of my intel compiled Open MPI libraries (/opt/intelsoft/openmpi/lib) to my DYLD_LIBRARY_PATH environment variable to to get codes to compile and/or run with ifort.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this what Intel recommends for anything compiled with ifort on OS X, or is this unique to OMPI-compiled MPI applications?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The problem is that adding /opt/intelsoft/openmpi/lib to DYLD_LIBRARY_PATH broke my Open MPI for gfortran. Now when I try to compile with mpif90 for gfortran it thinks it's actually trying to compile with ifort still. As soon as I take the above path out of DYLD_LIBRARY_PATH everything works fine.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Also, when I run ompi_info everything looks right except prefix. It says /opt/intelsoft/openmpi rather than /opt/gfortransoft/openmpi like it should. It should be noted that having /opt/intelsoft/openmpi in LD_LIBRARY_PATH does not produce the same effect.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not quite clear on your setup, but it *sounds* like you're somehow mixing up 2 different installations of OMPI -- one in /opt/intelsoft and the other in /opt/gfortransoft.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you verify that you're using the &quot;right&quot; mpif77 (and friends) when you intend to, and so on?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15163.php">Gilbert Grosdidier: "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix"</a>
<li><strong>Previous message:</strong> <a href="15161.php">Tim Prince: "Re: [OMPI users] Mac Ifort and gfortran together"</a>
<li><strong>In reply to:</strong> <a href="15155.php">Jeff Squyres: "Re: [OMPI users] Mac Ifort and gfortran together"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/03/15855.php">David Robertson: "Re: [OMPI users] Mac Ifort and gfortran together"</a>
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
