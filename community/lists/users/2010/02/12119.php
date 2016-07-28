<?
$subject_val = "Re: [OMPI users] (no subject)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 22 10:02:21 2010" -->
<!-- isoreceived="20100222150221" -->
<!-- sent="Mon, 22 Feb 2010 10:02:13 -0500" -->
<!-- isosent="20100222150213" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] (no subject)" -->
<!-- id="8B762663-4BF3-42C3-AD8D-5289C9FB0D3C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="59123.23634.qm_at_web46211.mail.sp1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] (no subject)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-22 10:02:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12120.php">Eugene Loh: "Re: [OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="12118.php">Jeff Squyres: "Re: [OMPI users] configure: error: Could not determine size of LOGICAL"</a>
<li><strong>In reply to:</strong> <a href="12114.php">Rodolfo Chua: "[OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12120.php">Eugene Loh: "Re: [OMPI users] (no subject)"</a>
<li><strong>Reply:</strong> <a href="12120.php">Eugene Loh: "Re: [OMPI users] (no subject)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 21, 2010, at 10:25 AM, Rodolfo Chua wrote:
<br>
<p><span class="quotelev1">&gt;  I used openMPI compiled with the GNU (gcc) compiler to run GULP code in parallel.
</span><br>
<span class="quotelev1">&gt;  But when I try to input &quot;mpirun -np 2 gulp &lt;input&gt;&quot;, GULP did not run in two
</span><br>
<span class="quotelev1">&gt;  processors. Can you give me any suggestion on how to compile GULP code exactly with openMPI.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;  Below is the instruction from GULP code manual.
</span><br>
<span class="quotelev1">&gt; &quot;If you wish to run the program in parallel using MPI then you will need to alter
</span><br>
<span class="quotelev1">&gt;  the file &quot;getmachine&quot; accordingly. The usual changes would be to add the &quot;-DMPI&quot;
</span><br>
<span class="quotelev1">&gt;  option and in some cases change the compiler name (for example tompif77/mpif90)
</span><br>
<span class="quotelev1">&gt;  or include the MPI libraries in the link stage.&quot;
</span><br>
<p>I'm afraid that I don't know the GULP code in particular, but their advice is sound: adding -DMPI sounds like something specific to their code (e.g., to activate the MPI code sections).  But using mpif77 / mpif90 as your compiler name in their build process is probably the Right thing to do (e.g., instead of ifort / gfortran / pgf77 / whatever).  This should build their executable with Open MPI's support libraries linked in, etc.
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="12120.php">Eugene Loh: "Re: [OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="12118.php">Jeff Squyres: "Re: [OMPI users] configure: error: Could not determine size of LOGICAL"</a>
<li><strong>In reply to:</strong> <a href="12114.php">Rodolfo Chua: "[OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12120.php">Eugene Loh: "Re: [OMPI users] (no subject)"</a>
<li><strong>Reply:</strong> <a href="12120.php">Eugene Loh: "Re: [OMPI users] (no subject)"</a>
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
