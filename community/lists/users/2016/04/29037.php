<?
$subject_val = "Re: [OMPI users] Ubuntu and LD_LIBRARY_PATH";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 26 12:35:50 2016" -->
<!-- isoreceived="20160426163550" -->
<!-- sent="Tue, 26 Apr 2016 17:35:19 +0100" -->
<!-- isosent="20160426163519" -->
<!-- name="John Hearns" -->
<!-- email="hearnsj_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Ubuntu and LD_LIBRARY_PATH" -->
<!-- id="CAPqNE2V64Kt3MkedXiKuNC+ooXmj2RAQ7WQ_ZYN=mABupLnCWA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="87inz4l4g7.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] Ubuntu and LD_LIBRARY_PATH<br>
<strong>From:</strong> John Hearns (<em>hearnsj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-26 12:35:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29038.php">Gilles Gouaillardet: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<li><strong>Previous message:</strong> <a href="29036.php">Dave Love: "Re: [OMPI users] Ubuntu and LD_LIBRARY_PATH"</a>
<li><strong>In reply to:</strong> <a href="29036.php">Dave Love: "Re: [OMPI users] Ubuntu and LD_LIBRARY_PATH"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/05/29077.php">Dave Love: "Re: [OMPI users] Ubuntu and LD_LIBRARY_PATH"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/05/29077.php">Dave Love: "Re: [OMPI users] Ubuntu and LD_LIBRARY_PATH"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rob,
<br>
I agree with what Dave Love says.   The distro packaged OpenMPI packages
<br>
should set things up OK for you.
<br>
I guess that is true on the head node, but from what you say maybe the
<br>
cluster compute nodes are being installed some other way.
<br>
<p>On HPC clusters, when you are managing alternate packages - and you do!  -
<br>
then the common method is to use the 'Modules' environment to set those
<br>
paths and library include paths.
<br>
&nbsp;&nbsp;<a href="http://modules.sourceforge.net/">http://modules.sourceforge.net/</a>
<br>
<p>May I ask though - what is the purpose of your cluster?
<br>
If you are using Ubunutu, have you looked at Qlustar?
<br>
<a href="https://www.qlustar.com/">https://www.qlustar.com/</a>
<br>
Might save you a whole lot of heartache!
<br>
<p><p><p><p><p><p><p>On 26 April 2016 at 17:28, Dave Love &lt;d.love_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; &quot;Rob Malpass&quot; &lt;lug_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sorry if this isn't 100% relevant to this list but I'm at my wits end.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; After a lot of hacking, I've finally configured openmpi on my Ubuntu
</span><br>
<span class="quotelev2">&gt; &gt; cluster.   I had been having awful problems with not being able to find
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev2">&gt; &gt; libraries on the remote nodes but apparently the workaround is to use
</span><br>
<span class="quotelev2">&gt; &gt; ld.conf.so.d/*.conf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That shouldn't be necessary with Debian/Ubuntu packages; there's a
</span><br>
<span class="quotelev1">&gt; default MPI set through alternatives.  If that isn't working, make an
</span><br>
<span class="quotelev1">&gt; Ubuntu bug report, but it seems OK in Debian stable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you're not using a packaged version (why?), the usual way to set the
</span><br>
<span class="quotelev1">&gt; environment is with environment modules (the environment-modules
</span><br>
<span class="quotelev1">&gt; package).
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/29036.php">http://www.open-mpi.org/community/lists/users/2016/04/29036.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29037/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29038.php">Gilles Gouaillardet: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<li><strong>Previous message:</strong> <a href="29036.php">Dave Love: "Re: [OMPI users] Ubuntu and LD_LIBRARY_PATH"</a>
<li><strong>In reply to:</strong> <a href="29036.php">Dave Love: "Re: [OMPI users] Ubuntu and LD_LIBRARY_PATH"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/05/29077.php">Dave Love: "Re: [OMPI users] Ubuntu and LD_LIBRARY_PATH"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/05/29077.php">Dave Love: "Re: [OMPI users] Ubuntu and LD_LIBRARY_PATH"</a>
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
