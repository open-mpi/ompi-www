<?
$subject_val = "Re: [OMPI users] quadrics support?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  2 09:34:09 2009" -->
<!-- isoreceived="20090702133409" -->
<!-- sent="Thu, 2 Jul 2009 09:34:04 -0400" -->
<!-- isosent="20090702133404" -->
<!-- name="Michael Di Domenico" -->
<!-- email="mdidomenico4_at_[hidden]" -->
<!-- subject="Re: [OMPI users] quadrics support?" -->
<!-- id="e75d22a90907020634x3eec3760r2e37762759a764c1_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C1BA0737-D8C8-45CF-B56B-1A8D43C727EB_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] quadrics support?<br>
<strong>From:</strong> Michael Di Domenico (<em>mdidomenico4_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-02 09:34:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9804.php">Swamy Kandadai: "Re: [OMPI users] OpenMPI vs Intel MPI"</a>
<li><strong>Previous message:</strong> <a href="9802.php">Jeff Squyres: "Re: [OMPI users] quadrics support?"</a>
<li><strong>In reply to:</strong> <a href="9802.php">Jeff Squyres: "Re: [OMPI users] quadrics support?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9808.php">Ashley Pittman: "Re: [OMPI users] quadrics support?"</a>
<li><strong>Reply:</strong> <a href="9808.php">Ashley Pittman: "Re: [OMPI users] quadrics support?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>Okay, thanks.  I'll give it a shot and report back.  I can't
<br>
contribute any code, but I can certainly do testing...
<br>
<p>On Thu, Jul 2, 2009 at 9:23 AM, Jeff Squyres&lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I see ompi/mca/btl/elan in the OMPI SVN development trunk and in the 1.3
</span><br>
<span class="quotelev1">&gt; tree (where elan = the quadrics interface).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So actually, looking at the 1.3.x README, I see configure switches like
</span><br>
<span class="quotelev1">&gt; &quot;--with-elan&quot; that specifies where the Elan (Quadrics) headers and libraries
</span><br>
<span class="quotelev1">&gt; live.  I have no Quadrics networks and didn't pay attention to this
</span><br>
<span class="quotelev1">&gt; development at all (obviously ;-) ) -- you might want to give it a shot and
</span><br>
<span class="quotelev1">&gt; see how well it performs.  Meaning: I'm sure it works or UT wouldn't have
</span><br>
<span class="quotelev1">&gt; pushed this stuff upstream, but I have no idea how well tuned it is.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you build OMPI properly, you should be able to tell if Quadrics support
</span><br>
<span class="quotelev1">&gt; is included via
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    ompi_info | grep elan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You should see a BTL line for elan (i.e., a BTL plugin for &quot;elan&quot; is
</span><br>
<span class="quotelev1">&gt; installed and functional).  Although OMPI should automatically pick elan for
</span><br>
<span class="quotelev1">&gt; MPI communications, you can force OMPI to pick it via:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    mpirun --mca btl elan,self ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Quadrics networks should also qualify for Open MPI's &quot;other&quot; type of network
</span><br>
<span class="quotelev1">&gt; support (the MTL, instead of the BTL).  MTL level support can typically give
</span><br>
<span class="quotelev1">&gt; slightly better performance on some types of networks, but it doesn't look
</span><br>
<span class="quotelev1">&gt; like anyone did any work in this area.  Contributions are always welcome, of
</span><br>
<span class="quotelev1">&gt; course!  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 2, 2009, at 9:12 AM, Michael Di Domenico wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks, honestly though if the patches haven't been pulled mainline,
</span><br>
<span class="quotelev2">&gt;&gt; we are not likely to bring it internally.  I was hoping that quadrics
</span><br>
<span class="quotelev2">&gt;&gt; support was mainline, but the documentation was out of date.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Jul 2, 2009 at 8:08 AM, Jeff Squyres&lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; George --
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I know that U. Tennessee did some work in this area; did it ever
</span><br>
<span class="quotelev3">&gt;&gt; &gt; materialize?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Jul 1, 2009, at 4:49 PM, Michael Di Domenico wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Did the quadrics support for OpenMPI ever materialize?  I can't find
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; any documentation on the web about it and the few mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; messages I came across showed some hints that it might be in progress
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; but that was way back in 2007
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Thanks
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
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
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9804.php">Swamy Kandadai: "Re: [OMPI users] OpenMPI vs Intel MPI"</a>
<li><strong>Previous message:</strong> <a href="9802.php">Jeff Squyres: "Re: [OMPI users] quadrics support?"</a>
<li><strong>In reply to:</strong> <a href="9802.php">Jeff Squyres: "Re: [OMPI users] quadrics support?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9808.php">Ashley Pittman: "Re: [OMPI users] quadrics support?"</a>
<li><strong>Reply:</strong> <a href="9808.php">Ashley Pittman: "Re: [OMPI users] quadrics support?"</a>
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
