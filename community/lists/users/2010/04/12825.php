<?
$subject_val = "Re: [OMPI users] mpirun works locally but not through network";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 27 10:46:47 2010" -->
<!-- isoreceived="20100427144647" -->
<!-- sent="Tue, 27 Apr 2010 10:46:42 -0400" -->
<!-- isosent="20100427144642" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun works locally but not through network" -->
<!-- id="88F15890-CEDD-4F68-BFE7-12940C2A1BA0_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="584851.33788.qm_at_web24002.mail.ird.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun works locally but not through network<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-27 10:46:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12826.php">Edmund Sumbar: "Re: [OMPI users] OpenMPI &amp; SGE: bash errors at mpirun"</a>
<li><strong>Previous message:</strong> <a href="12824.php">Dave Love: "Re: [OMPI users] OpenMPI &amp; SGE: bash errors at mpirun"</a>
<li><strong>In reply to:</strong> <a href="12822.php">Nguyen Kim Son: "[OMPI users] mpirun works locally but not through network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12831.php">Nguyen Kim Son: "Re: [OMPI users] mpirun works locally but not through network"</a>
<li><strong>Reply:</strong> <a href="12831.php">Nguyen Kim Son: "Re: [OMPI users] mpirun works locally but not through network"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not intimately familiar with boost++ -- you might want to try the &quot;hello world&quot; and &quot;ring&quot; example programs in the OMPI examples/ directory as a baseline.
<br>
<p>Additionally, try executing a non-MPI program such as &quot;hostname&quot; to verify that your remote connectivity is working.  For example:
<br>
<p>$ mpirun --host localhost,name_of_distant_machine hostname
<br>
<p>You should see the output of both &quot;hostname&quot; executions.  If you don't, check the process table and see if OMPI is trying to ssh or rsh over to the remote host, and see what is happening on the remote host.  E.g., is that rsh or ssh being blocked?  Or is it actually executing on the remote machine and hanging?  Or ...?
<br>
<p>Ensure that you have the same version of OMPI installed on both machines and that both are in your default search PATH for non-interactive logins.
<br>
<p>Once you get something like &quot;hostname&quot; to work, it's much more likely that an MPI application will also work.
<br>
&nbsp;
<br>
<p>On Apr 27, 2010, at 10:19 AM, Nguyen Kim Son wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'am writing a small program where the process of rank 0 sends &quot;alo alo&quot; to the process of rank 1 and then process 1 will show this message on screen. I am using boost++ library but result stays the same when I use the MPI standard.
</span><br>
<span class="quotelev1">&gt; The program work locally ( that means: mpirun --host localhost), on the distant machine (mpirun --host name_of_distant_machine) but not on both ( mpirun --host localhost, name_of_distant_machine). There is no error message so i don't have any idea to resolve this.
</span><br>
<span class="quotelev1">&gt; The machine I am running is a virtual one, and the distant machine too.
</span><br>
<span class="quotelev1">&gt; Thank you in advance!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Son.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nguyen Kim Son.
</span><br>
<span class="quotelev1">&gt; Antibes, France
</span><br>
<span class="quotelev1">&gt; Tel: +336 48 28 37 47
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;alo_example.cpp&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="12826.php">Edmund Sumbar: "Re: [OMPI users] OpenMPI &amp; SGE: bash errors at mpirun"</a>
<li><strong>Previous message:</strong> <a href="12824.php">Dave Love: "Re: [OMPI users] OpenMPI &amp; SGE: bash errors at mpirun"</a>
<li><strong>In reply to:</strong> <a href="12822.php">Nguyen Kim Son: "[OMPI users] mpirun works locally but not through network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12831.php">Nguyen Kim Son: "Re: [OMPI users] mpirun works locally but not through network"</a>
<li><strong>Reply:</strong> <a href="12831.php">Nguyen Kim Son: "Re: [OMPI users] mpirun works locally but not through network"</a>
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
