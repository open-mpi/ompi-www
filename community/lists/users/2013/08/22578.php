<?
$subject_val = "Re: [OMPI users] Trouble with Suse Linux Enterprise Server 11 Installation";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 30 12:29:28 2013" -->
<!-- isoreceived="20130830162928" -->
<!-- sent="Fri, 30 Aug 2013 09:29:25 -0700" -->
<!-- isosent="20130830162925" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Trouble with Suse Linux Enterprise Server 11 Installation" -->
<!-- id="A5EAB109-A9E6-4622-97DF-8BD9A41D811E_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAPqNE2WL2qfDaqX0cNLm2dAo6Hi1JLxhYUW=3bJ7Tz26AoWT4g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Trouble with Suse Linux Enterprise Server 11 Installation<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-30 12:29:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22579.php">John Hearns: "Re: [OMPI users] Trouble with Suse Linux Enterprise Server 11 Installation"</a>
<li><strong>Previous message:</strong> <a href="22577.php">John Hearns: "Re: [OMPI users] Trouble with Suse Linux Enterprise Server 11 Installation"</a>
<li><strong>In reply to:</strong> <a href="22577.php">John Hearns: "Re: [OMPI users] Trouble with Suse Linux Enterprise Server 11 Installation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22579.php">John Hearns: "Re: [OMPI users] Trouble with Suse Linux Enterprise Server 11 Installation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just download the OMPI tarball from the OMPI site:
<br>
<p><a href="http://www.open-mpi.org/software/ompi/v1.6/">http://www.open-mpi.org/software/ompi/v1.6/</a>
<br>
<p>Then configure and build
<br>
<p>./configure --prefix=&lt;wherever-you-want-to-install&gt;
<br>
make clean all install
<br>
<p>Set your PATH to start with &lt;prefix&gt;/bin, and your LD_LIBRARY_PATH to start with &lt;prefix&gt;/lib and you are done with the OMPI part - you'll have to check the OpenFoam folks for their side
<br>
<p><p>On Aug 30, 2013, at 9:24 AM, John Hearns &lt;hearnsj_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I agree what Ralph says.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a lot of experience in running SLES 10 and 11 systems and many flavours of Opensuse.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am not sure if rpms for Openmpi are available for Sles - I will check.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Installing Openfoam is a pig I agree.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You could be better off with Opensuse from a point of view of Openmpi and gcc versions.
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22578/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22579.php">John Hearns: "Re: [OMPI users] Trouble with Suse Linux Enterprise Server 11 Installation"</a>
<li><strong>Previous message:</strong> <a href="22577.php">John Hearns: "Re: [OMPI users] Trouble with Suse Linux Enterprise Server 11 Installation"</a>
<li><strong>In reply to:</strong> <a href="22577.php">John Hearns: "Re: [OMPI users] Trouble with Suse Linux Enterprise Server 11 Installation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22579.php">John Hearns: "Re: [OMPI users] Trouble with Suse Linux Enterprise Server 11 Installation"</a>
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
