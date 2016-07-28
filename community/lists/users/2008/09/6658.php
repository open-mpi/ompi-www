<?
$subject_val = "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 22 11:24:33 2008" -->
<!-- isoreceived="20080922152433" -->
<!-- sent="Mon, 22 Sep 2008 11:24:27 -0400" -->
<!-- isosent="20080922152427" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Configure and Build ok, but mpi module not recognized?" -->
<!-- id="9B96F664-9D58-4925-A406-DE08B81ED27C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48535380809220814t4ed70fb7k8bc7faf339881aeb_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Configure and Build ok, but mpi module not recognized?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-22 11:24:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6659.php">Gus Correa: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Previous message:</strong> <a href="6657.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>In reply to:</strong> <a href="6657.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6659.php">Gus Correa: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I unfortunately don't know ifort's precedence rules for finding  
<br>
modules -- I actually don't even remember if -I is the right flag to  
<br>
find them.  mpif90 should be adding whatever flags are necessary to  
<br>
find out mpi.mod, though -- but I'm wondering if MPICH's is being  
<br>
found first, since it's in /usr/local/lib.  Check the ifort man page,  
<br>
I guess...?  An easy way to test would be to rename /usr/local/lib/ 
<br>
mpi.mod to be /usr/local/lib/foo.mod, and then see if your compile  
<br>
works.  If it does, it might be simplest to install MPICH into  
<br>
somewhere other than /usr/local.
<br>
<p>You might also want to check your distro anyway; some distros are  
<br>
shipping Open MPI these days and I don't know what options you need to  
<br>
select to get their version of Open MPI installed by default (or not).
<br>
<p><p>On Sep 22, 2008, at 11:14 AM, Brian Harker wrote:
<br>
<p><span class="quotelev1">&gt; I built and installed both MPICH2 and openMPI from source, so no
</span><br>
<span class="quotelev1">&gt; distribution packages or anything.  MPICH2 has the modules located in
</span><br>
<span class="quotelev1">&gt; /usr/local/include, which I assume would be found (since its in my
</span><br>
<span class="quotelev1">&gt; path), were it not for specifying -I$OPENMPI_HOME/lib at compile time,
</span><br>
<span class="quotelev1">&gt; right?  I can't imagine that if you tell it where to look for the
</span><br>
<span class="quotelev1">&gt; correct modules, it would search through your path first before going
</span><br>
<span class="quotelev1">&gt; to where you tell it to go.  Or am I too optimistic?  Thanks again for
</span><br>
<span class="quotelev1">&gt; the input!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Sep 22, 2008 at 8:58 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 22, 2008, at 10:10 AM, Brian Harker wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for the reply...crap, $HOME/openmpi/lib does contains all the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; various lilbmpi* files as well as mpi.mod,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That should be correct.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but still get the same
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error at compile-time.  Yes, I made sure to specifically build  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with ifort 10.1.012, and did run the --showme command right after
</span><br>
<span class="quotelev3">&gt;&gt;&gt; installation to make sure the wrapper compiler was using ifort as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; well.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ok, good.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Before posting to this mailing list, I did uninstall and re-install
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openMPI several times to make sure I had a clean install.  Still no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; luck.  :(
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ok.  Have you checked around your machine to ensure that there is  
</span><br>
<span class="quotelev2">&gt;&gt; no other
</span><br>
<span class="quotelev2">&gt;&gt; mpi.mod that the compiler is finding first?  E.g., in your MPICH2
</span><br>
<span class="quotelev2">&gt;&gt; installation?  Or is Open MPI installed by your distro, perchance?   
</span><br>
<span class="quotelev2">&gt;&gt; You
</span><br>
<span class="quotelev2">&gt;&gt; might want to try a &quot;rpm -qa | grep openmpi&quot; (or whatever your  
</span><br>
<span class="quotelev2">&gt;&gt; distro's
</span><br>
<span class="quotelev2">&gt;&gt; equivalent is to check already-installed packages).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; brian.harker_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;In science, there is only physics; all the rest is stamp-collecting.&quot;
</span><br>
<span class="quotelev1">&gt; -Ernest Rutherford
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6659.php">Gus Correa: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Previous message:</strong> <a href="6657.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>In reply to:</strong> <a href="6657.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6659.php">Gus Correa: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
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
