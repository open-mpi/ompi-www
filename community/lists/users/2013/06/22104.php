<?
$subject_val = "Re: [OMPI users] QLogic HCA random crash after prolonged use";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun 15 13:44:53 2013" -->
<!-- isoreceived="20130615174453" -->
<!-- sent="Sat, 15 Jun 2013 10:44:48 -0700 (PDT)" -->
<!-- isosent="20130615174448" -->
<!-- name="Vanja Z" -->
<!-- email="vanja_z_at_[hidden]" -->
<!-- subject="Re: [OMPI users] QLogic HCA random crash after prolonged use" -->
<!-- id="1371318288.88151.YahooMailNeo_at_web125106.mail.ne1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[OMPI users] QLogic HCA random crash after prolonged use" -->
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
<strong>Subject:</strong> Re: [OMPI users] QLogic HCA random crash after prolonged use<br>
<strong>From:</strong> Vanja Z (<em>vanja_z_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-15 13:44:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22105.php">Hans Ekkehard Plesser: "Re: [OMPI users] MPI_Init_thread(..., MPI_THREAD_SERIALIZED) hangs under OSX 10.8.4 if compiled with	OpenMPI 1.7.1"</a>
<li><strong>Previous message:</strong> <a href="22103.php">Zehan Cui: "[OMPI users] MPI_Iallgatherv performance"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/04/21756.php">Vanja Z: "[OMPI users] QLogic HCA random crash after prolonged use"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev2">&gt;&gt;&#160; I have seen it recommended to use psm instead of openib for QLogic cards.
</span><br>
<p><span class="quotelev1">&gt; [Tom] 
</span><br>
<span class="quotelev1">&gt; Yes.&#160; PSM will perform better and be more stable when running OpenMPI than using 
</span><br>
<span class="quotelev1">&gt; verbs.&#160; Intel has acquired the InfiniBand assets of QLogic about a year ago.&#160; 
</span><br>
<span class="quotelev1">&gt; These SDR HCAs are no longer supported, but should still work.&#160; You can get the 
</span><br>
<span class="quotelev1">&gt; driver (ib_qib) and PSM library from OFED 1.5.4.1 or the current release OFED 
</span><br>
<span class="quotelev1">&gt; 3.5.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With the current OFED 3.5 release there are included psm-release notes which 
</span><br>
<span class="quotelev1">&gt; start out this way (read down to the OpenMPI build instructions for PSM):
</span><br>
<p>Thanks
<br>
&nbsp;for the reply (and sorry for my late response). I had already tried 
<br>
compiling OpenMPI with the &quot;--with-psm&quot; flag. It compiles but doesn't 
<br>
seem to get me much closer to actually using psm.
<br>
<p>I've found a software package(s) available from the Intel site,
<br>
<a href="http://www.intel.com/content/www/us/en/search.html?keyword=qlogic+ofed">http://www.intel.com/content/www/us/en/search.html?keyword=qlogic+ofed</a>
<br>
It
<br>
&nbsp;seems like installing these on a supported OS (RHEL5/6 and SLES 10/11) 
<br>
is the recommended method for using QLogic/Intel cards. I also found 
<br>
this very informative post by Julian Blache explaining how he got it all
<br>
&nbsp;working on Debian Squeeze,
<br>
<a href="http://swik.net/Debian/Planet+Debian/Julien+Blache%3A+QLogic+QLE73xx+InfiniBand+adapters,+QDR,+ib_qib,+OFED+1.5.2+and+Debian+Squeeze/e56if">http://swik.net/Debian/Planet+Debian/Julien+Blache%3A+QLogic+QLE73xx+InfiniBand+adapters,+QDR,+ib_qib,+OFED+1.5.2+and+Debian+Squeeze/e56if</a>
<br>
It
<br>
&nbsp;seems like apart from building OpenMPI with the right flag there is 
<br>
also some configuration requiring at the very least a utility called 
<br>
iba_portconfig.sh and an openibd initscript. I have tried getting these 
<br>
utilities from various sources and I can't find a version that doesn't 
<br>
segfault on my machines (Debian Wheezy). It's also not clear to me what 
<br>
should come from the Debian repos and what should come from the Intel 
<br>
package including what to do about the kernel :S
<br>
<p>The more I read 
<br>
online, the more it seems that these cards have absolutely no hope of 
<br>
operating stably. With a recent kernel upgrade I'm also getting a new 
<br>
MPI fork warning that some searching indicates is also connected to 
<br>
QLogic cards. I bought 24 of these cards a few months ago and it has 
<br>
turned into the biggest computer related nightmare I've ever 
<br>
experienced. I'm beginning to think I'm better off trying to sell them 
<br>
and buy an equivalent from Mellanox card (I have 2 Mellanox cards that I
<br>
&nbsp;seem to work fine on Debian out of the box).
<br>
<p>Have I got any chance of making these cards work on Debian Wheezy?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22105.php">Hans Ekkehard Plesser: "Re: [OMPI users] MPI_Init_thread(..., MPI_THREAD_SERIALIZED) hangs under OSX 10.8.4 if compiled with	OpenMPI 1.7.1"</a>
<li><strong>Previous message:</strong> <a href="22103.php">Zehan Cui: "[OMPI users] MPI_Iallgatherv performance"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/04/21756.php">Vanja Z: "[OMPI users] QLogic HCA random crash after prolonged use"</a>
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
