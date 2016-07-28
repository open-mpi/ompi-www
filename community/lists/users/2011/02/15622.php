<?
$subject_val = "Re: [OMPI users] Use mca_base_param_file_path to set .ssh?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 15 14:32:01 2011" -->
<!-- isoreceived="20110215193201" -->
<!-- sent="Tue, 15 Feb 2011 12:31:53 -0700" -->
<!-- isosent="20110215193153" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Use mca_base_param_file_path to set .ssh?" -->
<!-- id="2DC1A543-F04F-4E61-8F17-EB7505D419A6_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D5AD304.4030800_at_norbl.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Use mca_base_param_file_path to set .ssh?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-15 14:31:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15623.php">Tena Sakai: "[OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<li><strong>Previous message:</strong> <a href="15621.php">Barnet Wagman: "Re: [OMPI users] Use mca_base_param_file_path to set .ssh?"</a>
<li><strong>In reply to:</strong> <a href="15621.php">Barnet Wagman: "Re: [OMPI users] Use mca_base_param_file_path to set .ssh?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15624.php">Barnet Wagman: "Re: [OMPI users] Use mca_base_param_file_path to set .ssh?"</a>
<li><strong>Reply:</strong> <a href="15624.php">Barnet Wagman: "Re: [OMPI users] Use mca_base_param_file_path to set .ssh?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Setting the mca param plm_rsh_agent to &quot;ssh -i xxx&quot; should do the trick, I think - haven't tried it, but it should work.
<br>
<p><p>On Feb 15, 2011, at 12:24 PM, Barnet Wagman wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; OMPI doesn't do anything relative to the .ssh directory, or what key is used for ssh authentication.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Afraid that is one you have to solve at the system level :-/
</span><br>
<span class="quotelev1">&gt; ^ In that case, where and how does OMPI call ssh?  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ssh has a '-i' option which can be used to specify the id_rsa file.  If ssh is called in a script (or if there's a way to pass ssh args into OMPI), then I can just use that ssh option.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15622/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15623.php">Tena Sakai: "[OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<li><strong>Previous message:</strong> <a href="15621.php">Barnet Wagman: "Re: [OMPI users] Use mca_base_param_file_path to set .ssh?"</a>
<li><strong>In reply to:</strong> <a href="15621.php">Barnet Wagman: "Re: [OMPI users] Use mca_base_param_file_path to set .ssh?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15624.php">Barnet Wagman: "Re: [OMPI users] Use mca_base_param_file_path to set .ssh?"</a>
<li><strong>Reply:</strong> <a href="15624.php">Barnet Wagman: "Re: [OMPI users] Use mca_base_param_file_path to set .ssh?"</a>
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
