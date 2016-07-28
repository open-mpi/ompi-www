<?
$subject_val = "Re: [OMPI users] configuration and compilation outputs";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 29 09:31:37 2010" -->
<!-- isoreceived="20100329133137" -->
<!-- sent="Mon, 29 Mar 2010 09:31:31 -0400" -->
<!-- isosent="20100329133131" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configuration and compilation outputs" -->
<!-- id="9789CF7D-41A4-4A7F-91DC-0601128FFA60_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="25664357.356279.1269867732621.JavaMail.root_at_frontal2" -->
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
<strong>Subject:</strong> Re: [OMPI users] configuration and compilation outputs<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-29 09:31:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12449.php">Josh Hursey: "Re: [OMPI users] top command output shows huge CPU utilization when	openmpi processes resume after the checkpoint"</a>
<li><strong>Previous message:</strong> <a href="12447.php">Philippe GOURET: "[OMPI users] configuration and compilation outputs"</a>
<li><strong>In reply to:</strong> <a href="12447.php">Philippe GOURET: "[OMPI users] configuration and compilation outputs"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't see -static listed in the config.log at all, but I see it listed in the make output that you sent in the first mail.
<br>
<p>Additionally, the make output that you sent in your mail doesn't seem to match the make.output that you attached in your last email.  Are you mixing and matching multiple builds by accident, perchance?
<br>
<p>FWIW, it's typically best to set flags in configure via the configure command line, like this:
<br>
<p>&nbsp;&nbsp;./configure CFLAGS=-static ....etc...
<br>
<p>Rather than setenv'ing them before running configure.  The (minor) advantage of this is that all the flags are then recorded in the config.log file.  If you setenv them, then config.log doesn't show everything.
<br>
<p><p><p>On Mar 29, 2010, at 9:02 AM, Philippe GOURET wrote:
<br>
<p><span class="quotelev1">&gt; &lt;outputs.tar.gz&gt;_______________________________________________
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
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12449.php">Josh Hursey: "Re: [OMPI users] top command output shows huge CPU utilization when	openmpi processes resume after the checkpoint"</a>
<li><strong>Previous message:</strong> <a href="12447.php">Philippe GOURET: "[OMPI users] configuration and compilation outputs"</a>
<li><strong>In reply to:</strong> <a href="12447.php">Philippe GOURET: "[OMPI users] configuration and compilation outputs"</a>
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
