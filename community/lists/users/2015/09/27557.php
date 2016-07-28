<?
$subject_val = "Re: [OMPI users] As one MPI process executes MPI_Barrier(), other processes hang";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 11 17:50:09 2015" -->
<!-- isoreceived="20150911215009" -->
<!-- sent="Fri, 11 Sep 2015 21:50:04 +0000" -->
<!-- isosent="20150911215004" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] As one MPI process executes MPI_Barrier(), other processes hang" -->
<!-- id="554398D5-5378-4D73-8B91-075CC872D0CF_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAC946L3G1vtMFaUuODb4vocjsJ1P7=LthtpH2nWwYLGrOs8gjQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] As one MPI process executes MPI_Barrier(), other processes hang<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-11 17:50:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27558.php">Saliya Ekanayake: "[OMPI users] Help with Specific Binding"</a>
<li><strong>Previous message:</strong> <a href="27556.php">Lane, William: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<li><strong>In reply to:</strong> <a href="27541.php">Dhanashree N P: "[OMPI users] As one MPI process executes MPI_Barrier(), other processes hang"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looks like your question was answered on StackOverflow.
<br>
<p><span class="quotelev1">&gt; On Sep 5, 2015, at 11:14 AM, Dhanashree N P &lt;dhan0110_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have an MPI program for having multiple processes read from a file that contains list of file names and based on the file names read - it reads the corresponding file and counts the frequency of words.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If one of the processes completes this and returns - to block executing MPI_Barrier(), the other processes also hang. On debugging, it could be seen that the readFile() function is not entered by the other processes currently in process_files().
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unable to figure out why this happens. Please find the code here
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any suggestions would be very much helpful!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dhanashree
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27541.php">http://www.open-mpi.org/community/lists/users/2015/09/27541.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27558.php">Saliya Ekanayake: "[OMPI users] Help with Specific Binding"</a>
<li><strong>Previous message:</strong> <a href="27556.php">Lane, William: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<li><strong>In reply to:</strong> <a href="27541.php">Dhanashree N P: "[OMPI users] As one MPI process executes MPI_Barrier(), other processes hang"</a>
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
