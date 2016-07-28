<?
$subject_val = "Re: [OMPI users] MPI_Init seems to hang, but works after a, minute or two";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 27 13:25:48 2014" -->
<!-- isoreceived="20141027172548" -->
<!-- sent="Mon, 27 Oct 2014 18:25:52 +0100" -->
<!-- isosent="20141027172552" -->
<!-- name="maxinator333" -->
<!-- email="maxinator333_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Init seems to hang, but works after a, minute or two" -->
<!-- id="544E8020.2000208_at_googlemail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.3283.1414417746.23055.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Init seems to hang, but works after a, minute or two<br>
<strong>From:</strong> maxinator333 (<em>maxinator333_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-27 13:25:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25616.php">Brock Palen: "Re: [OMPI users] HAMSTER MPI+Yarn"</a>
<li><strong>Previous message:</strong> <a href="25614.php">Ralph Castain: "Re: [OMPI users] OMPI users] OMPI users] OMPI users] which info is needed for SIGSEGV inJava foropenmpi-dev-124-g91e9686on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25626.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Init seems to hang, but works after a, minute or two"</a>
<li><strong>Reply:</strong> <a href="25626.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Init seems to hang, but works after a, minute or two"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; After compiling and running a MPI program, it seems to hang at
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Init(), but it eventually will work after a minute or two.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; While the problem occured on my Notebook it did not on my desktop PC.
</span><br>
<span class="quotelev1">&gt; It can be a timeout on a network interface.
</span><br>
<span class="quotelev1">&gt; I see a similar issue with wireless ON but not with wireless OFF
</span><br>
<span class="quotelev1">&gt; on my notebook.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the past I saw with some virtual driver of Telecom company
</span><br>
<span class="quotelev1">&gt; for the 3G driver.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Both run on Win 7, cygwin 64 Bit, OpenMPI version 1.8.3 r32794
</span><br>
<span class="quotelev2">&gt;&gt; (ompi_info), g++ v 4.8.3. I actually synced the cygwin installations
</span><br>
<span class="quotelev2">&gt;&gt; later on, and it still didn't work, but it did for a short time after a
</span><br>
<span class="quotelev2">&gt;&gt; restart...
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Marco
</span><br>
<span class="quotelev1">&gt;
</span><br>
Thank you :)
<br>
Deactivating my WLAN did indeed the trick!
<br>
It also seems to not work, if a LAN-cable is plugged in. No difference 
<br>
if I am correctly connected (to the internet/gateway) or not (wrong IP, 
<br>
e.g. static given IP instead of mandatory DHCP)
<br>
Again: deactivating the relevant LAN helps
<br>
It seems, that in contrast to LAN, for WLAN it makes a difference, if 
<br>
I'm connected to some network or not. If not connected, it seems to 
<br>
work, without deactivating the whole hardware.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25616.php">Brock Palen: "Re: [OMPI users] HAMSTER MPI+Yarn"</a>
<li><strong>Previous message:</strong> <a href="25614.php">Ralph Castain: "Re: [OMPI users] OMPI users] OMPI users] OMPI users] which info is needed for SIGSEGV inJava foropenmpi-dev-124-g91e9686on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25626.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Init seems to hang, but works after a, minute or two"</a>
<li><strong>Reply:</strong> <a href="25626.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Init seems to hang, but works after a, minute or two"</a>
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
