<?
$subject_val = "Re: [OMPI users] Use mca_base_param_file_path to set .ssh?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 15 14:25:06 2011" -->
<!-- isoreceived="20110215192506" -->
<!-- sent="Tue, 15 Feb 2011 13:24:52 -0600" -->
<!-- isosent="20110215192452" -->
<!-- name="Barnet Wagman" -->
<!-- email="bw_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Use mca_base_param_file_path to set .ssh?" -->
<!-- id="4D5AD304.4030800_at_norbl.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20AC7102-202E-4A07-B676-FDDE8C15E191_at_open-mpi.org" -->
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
<strong>From:</strong> Barnet Wagman (<em>bw_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-15 14:24:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15622.php">Ralph Castain: "Re: [OMPI users] Use mca_base_param_file_path to set .ssh?"</a>
<li><strong>Previous message:</strong> <a href="15620.php">Ralph Castain: "Re: [OMPI users] Use mca_base_param_file_path to set .ssh?"</a>
<li><strong>In reply to:</strong> <a href="15620.php">Ralph Castain: "Re: [OMPI users] Use mca_base_param_file_path to set .ssh?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15622.php">Ralph Castain: "Re: [OMPI users] Use mca_base_param_file_path to set .ssh?"</a>
<li><strong>Reply:</strong> <a href="15622.php">Ralph Castain: "Re: [OMPI users] Use mca_base_param_file_path to set .ssh?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; OMPI doesn't do anything relative to the .ssh directory, or what key
</span><br>
<span class="quotelev1">&gt; is used for ssh authentication.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Afraid that is one you have to solve at the system level :-/
</span><br>
^ In that case, where and how does OMPI call ssh? 
<br>
<p>ssh has a '-i' option which can be used to specify the id_rsa file. 
<br>
/If/ ssh is called in a script (or if there's a way to pass ssh args
<br>
into OMPI), then I can just use that ssh option.
<br>
<p>thanks
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15621/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15622.php">Ralph Castain: "Re: [OMPI users] Use mca_base_param_file_path to set .ssh?"</a>
<li><strong>Previous message:</strong> <a href="15620.php">Ralph Castain: "Re: [OMPI users] Use mca_base_param_file_path to set .ssh?"</a>
<li><strong>In reply to:</strong> <a href="15620.php">Ralph Castain: "Re: [OMPI users] Use mca_base_param_file_path to set .ssh?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15622.php">Ralph Castain: "Re: [OMPI users] Use mca_base_param_file_path to set .ssh?"</a>
<li><strong>Reply:</strong> <a href="15622.php">Ralph Castain: "Re: [OMPI users] Use mca_base_param_file_path to set .ssh?"</a>
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
