<?
$subject_val = "Re: [OMPI users] Could not execute the executable &quot;/home/MET/hrm/bin/hostlist&quot;: Exec format errorI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  1 05:15:01 2012" -->
<!-- isoreceived="20120301101501" -->
<!-- sent="Thu, 1 Mar 2012 15:14:56 +0500" -->
<!-- isosent="20120301101456" -->
<!-- name="Syed Ahsan Ali" -->
<!-- email="ahsanshah01_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Could not execute the executable &amp;quot;/home/MET/hrm/bin/hostlist&amp;quot;: Exec format errorI" -->
<!-- id="CAMvdAsJVpQ50hg6BYgw=QFe-Wpx5+SR7idziQVA+Y3FGHDE6LQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] Could not execute the executable &amp;quot;/home/MET/hrm/bin/hostlist&amp;quot;: Exec format errorI" -->
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
<strong>From:</strong> Syed Ahsan Ali (<em>ahsanshah01_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-01 05:14:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18625.php">Jeffrey Squyres: "Re: [OMPI users] Very slow MPI_GATHER"</a>
<li><strong>Previous message:</strong> <a href="18623.php">Ralph Castain: "Re: [OMPI users] Very slow MPI_GATHER"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am able to run the application with LSF now, it strange because I wasn't
<br>
able to trace any error.
<br>
<p>On Thu, Mar 1, 2012 at 11:34 AM, PukkiMonkey &lt;pukkimonkey_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; What Jeff means is that because u didn't have echo &quot;mpirun...&gt;&gt;outfile&quot;
</span><br>
<span class="quotelev1">&gt; but
</span><br>
<span class="quotelev1">&gt; echo mpirun....&gt;&gt;outfile ,
</span><br>
<span class="quotelev1">&gt; you were piping the output to the outfile instead of stdout.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sent from my iPhone
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 29, 2012, at 8:44 PM, Syed Ahsan Ali &lt;ahsanshah01_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry Jeff I couldn't get you point.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Feb 29, 2012 at 4:27 PM, Jeffrey Squyres &lt;jsquyres_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 29, 2012, at 2:17 AM, Syed Ahsan Ali wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [pmdtest_at_pmd02 d00_dayfiles]$ echo ${MPIRUN} -np ${NPROC} -hostfile
</span><br>
<span class="quotelev2">&gt;&gt; $i{ABSDIR}/hostlist -mca btl sm,openib,self --mca btl_openib_use_srq 1
</span><br>
<span class="quotelev2">&gt;&gt; ./hrm &gt;&gt; ${OUTFILE}_hrm 2&gt;&amp;1
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [pmdtest_at_pmd02 d00_dayfiles]$
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Because you used &gt;&gt; and 2&gt;&amp;1, the output when to your ${OUTFILE}_hrm
</span><br>
<span class="quotelev2">&gt;&gt; file, not stdout.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Syed Ahsan Ali Bokhari
</span><br>
<span class="quotelev1">&gt; Electronic Engineer (EE)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Research &amp; Development Division
</span><br>
<span class="quotelev1">&gt; Pakistan Meteorological Department H-8/4, Islamabad.
</span><br>
<span class="quotelev1">&gt; Phone # off  +92518358714
</span><br>
<span class="quotelev1">&gt; Cell # +923155145014
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Syed Ahsan Ali Bokhari
Electronic Engineer (EE)
Research &amp; Development Division
Pakistan Meteorological Department H-8/4, Islamabad.
Phone # off  +92518358714
Cell # +923155145014
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="../../att-18624/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18625.php">Jeffrey Squyres: "Re: [OMPI users] Very slow MPI_GATHER"</a>
<li><strong>Previous message:</strong> <a href="18623.php">Ralph Castain: "Re: [OMPI users] Very slow MPI_GATHER"</a>
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
