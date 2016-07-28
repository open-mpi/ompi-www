<?
$subject_val = "Re: [OMPI users] Use mca_base_param_file_path to set .ssh?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 15 13:42:05 2011" -->
<!-- isoreceived="20110215184205" -->
<!-- sent="Tue, 15 Feb 2011 11:41:55 -0700" -->
<!-- isosent="20110215184155" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Use mca_base_param_file_path to set .ssh?" -->
<!-- id="20AC7102-202E-4A07-B676-FDDE8C15E191_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D5AC76B.4030808_at_norbl.com" -->
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
<strong>Date:</strong> 2011-02-15 13:41:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15621.php">Barnet Wagman: "Re: [OMPI users] Use mca_base_param_file_path to set .ssh?"</a>
<li><strong>Previous message:</strong> <a href="15619.php">Barnet Wagman: "[OMPI users] Use mca_base_param_file_path to set .ssh?"</a>
<li><strong>In reply to:</strong> <a href="15619.php">Barnet Wagman: "[OMPI users] Use mca_base_param_file_path to set .ssh?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15621.php">Barnet Wagman: "Re: [OMPI users] Use mca_base_param_file_path to set .ssh?"</a>
<li><strong>Reply:</strong> <a href="15621.php">Barnet Wagman: "Re: [OMPI users] Use mca_base_param_file_path to set .ssh?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OMPI doesn't do anything relative to the .ssh directory, or what key is used for ssh authentication.
<br>
<p>Afraid that is one you have to solve at the system level :-/
<br>
<p><p>On Feb 15, 2011, at 11:35 AM, Barnet Wagman wrote:
<br>
<p><span class="quotelev1">&gt; I need to find a way of controlling the rsa key used when open-mpi uses ssh to access hosts.  By default, ssh uses the 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     ~/.ssh/id_rsa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, I need to set the key used without messing around with users' .ssh directories.  It appears that in a default installation of open-mpi, ~/.ssh is specfied is mca_base_param_file_path.  Can I change the ssh directory used by setting this mca param? Or is there some other way of specifying the id_rsa file (other than changing ssh config files).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; More generally, is there anything posted that states in detail what mca_base_param_file_path controls?  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've found a reference to it in the FAQ: &quot;The MCA parameter (mca_base_param_file_path) specifies the path to search for AMCA files with relative paths. By default this is $SYSCONFDIR/amca-param-sets/:$CWD.&quot;   From this description, it doesn't like setting mca_base_param_file_path will solve my problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15620/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15621.php">Barnet Wagman: "Re: [OMPI users] Use mca_base_param_file_path to set .ssh?"</a>
<li><strong>Previous message:</strong> <a href="15619.php">Barnet Wagman: "[OMPI users] Use mca_base_param_file_path to set .ssh?"</a>
<li><strong>In reply to:</strong> <a href="15619.php">Barnet Wagman: "[OMPI users] Use mca_base_param_file_path to set .ssh?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15621.php">Barnet Wagman: "Re: [OMPI users] Use mca_base_param_file_path to set .ssh?"</a>
<li><strong>Reply:</strong> <a href="15621.php">Barnet Wagman: "Re: [OMPI users] Use mca_base_param_file_path to set .ssh?"</a>
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
