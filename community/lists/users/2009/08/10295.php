<?
$subject_val = "Re: [OMPI users] torque pbs behaviour...";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 11 09:28:44 2009" -->
<!-- isoreceived="20090811132844" -->
<!-- sent="Tue, 11 Aug 2009 07:28:38 -0600" -->
<!-- isosent="20090811132838" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] torque pbs behaviour..." -->
<!-- id="71d2d8cc0908110628g3ac423dg6bbeccc1a49b42e3_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="71d2d8cc0908110622g59cf1886i2bc65c0d3b033daf_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] torque pbs behaviour...<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-11 09:28:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10296.php">Mike Dubman: "[OMPI users] Error: system limit exceeded on number of pipes that can be open"</a>
<li><strong>Previous message:</strong> <a href="10294.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>In reply to:</strong> <a href="10294.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10297.php">Klymak Jody: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Reply:</strong> <a href="10297.php">Klymak Jody: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Reply:</strong> <a href="10300.php">Klymak Jody: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oops - I should have looked at your output more closely. The component_find
<br>
warnings are clearly indicating some old libs laying around, but that isn't
<br>
why your job is hanging.
<br>
<p>The reason your job is hanging is sitting in the orte-ps output. You have
<br>
multiple processes declaring themselves to be the same MPI rank. That
<br>
definitely won't work.
<br>
<p>The question is why is that happening? We use Torque all the time, so we
<br>
know that the basic support is correct. It -could- be related to lib
<br>
confusion, but I can't tell for sure.
<br>
<p>Can you rebuild OMPI with --enable-debug, and rerun the job with the
<br>
following added to your cmd line?
<br>
<p>-mca plm_base_verbose 5 --debug-daemons -mca odls_base_verbose 5
<br>
<p>I'm afraid the output will be a tad verbose, but I would appreciate seeing
<br>
it. Might also tell us something about the lib issue.
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p>On Tue, Aug 11, 2009 at 7:22 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Sorry, but Jeff is correct - that error message clearly indicates a version
</span><br>
<span class="quotelev1">&gt; mismatch. Somewhere, one or more of your nodes is still picking up an old
</span><br>
<span class="quotelev1">&gt; version.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Aug 11, 2009 at 7:16 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 11, 2009, at 9:11 AM, Klymak Jody wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  I have removed all the OS-X -supplied libraries, recompiled and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; installed openmpi 1.3.3, and I am *still* getting this warning when
</span><br>
<span class="quotelev3">&gt;&gt;&gt; running ompi_info:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [saturna.cluster:50307] mca: base: component_find: iof &quot;mca_iof_proxy&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; uses an MCA interface that is not recognized (component MCA v1.0.0 !=
</span><br>
<span class="quotelev3">&gt;&gt;&gt; supported MCA v2.0.0) -- ignored
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This means that OMPI is finding an mca_iof_proxy.la file at run time from
</span><br>
<span class="quotelev2">&gt;&gt; a prior version of Open MPI.  You might want to use &quot;find&quot; or &quot;locate&quot; to
</span><br>
<span class="quotelev2">&gt;&gt; search your nodes and find it.  I suspect that you somehow have an OMPI
</span><br>
<span class="quotelev2">&gt;&gt; 1.3.x install that overlaid an install of a prior OMPI version installation.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10295/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10296.php">Mike Dubman: "[OMPI users] Error: system limit exceeded on number of pipes that can be open"</a>
<li><strong>Previous message:</strong> <a href="10294.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>In reply to:</strong> <a href="10294.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10297.php">Klymak Jody: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Reply:</strong> <a href="10297.php">Klymak Jody: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Reply:</strong> <a href="10300.php">Klymak Jody: "Re: [OMPI users] torque pbs behaviour..."</a>
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
