<?
$subject_val = "Re: [OMPI users] Could not execute the executable &quot;/home/MET/hrm/bin/hostlist&quot;: Exec format error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  1 01:35:02 2012" -->
<!-- isoreceived="20120301063502" -->
<!-- sent="Wed, 29 Feb 2012 22:34:53 -0800" -->
<!-- isosent="20120301063453" -->
<!-- name="PukkiMonkey" -->
<!-- email="pukkimonkey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Could not execute the executable &amp;quot;/home/MET/hrm/bin/hostlist&amp;quot;: Exec format error" -->
<!-- id="0D6C4D54-2798-47E9-BC1C-128D9BC573FC_at_gmail.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAMvdAsJ1mQ7WKfqt8XncS25D6NeSf++-OygJtZ7aE-SCsomvCA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Could not execute the executable &quot;/home/MET/hrm/bin/hostlist&quot;: Exec format error<br>
<strong>From:</strong> PukkiMonkey (<em>pukkimonkey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-01 01:34:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18631.php">Pinero, Pedro_jose: "Re: [OMPI users] Very slow MPI_GATHER"</a>
<li><strong>Previous message:</strong> <a href="18629.php">Jingcha Joba: "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/02/18624.php">Syed Ahsan Ali: "Re: [OMPI users] Could not execute the executable &quot;/home/MET/hrm/bin/hostlist&quot;: Exec format error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/02/18592.php">Jeffrey Squyres: "Re: [OMPI users] Could not execute the executable&quot;/home/MET/hrm/bin/hostlist&quot;: Exec format error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What Jeff means is that because u didn't have echo &quot;mpirun...&gt;&gt;outfile&quot; but  
<br>
echo mpirun....&gt;&gt;outfile ,
<br>
you were piping the output to the outfile instead of stdout. 
<br>
<p>Sent from my iPhone
<br>
<p>On Feb 29, 2012, at 8:44 PM, Syed Ahsan Ali &lt;ahsanshah01_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Sorry Jeff I couldn't get you point.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Feb 29, 2012 at 4:27 PM, Jeffrey Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; On Feb 29, 2012, at 2:17 AM, Syed Ahsan Ali wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [pmdtest_at_pmd02 d00_dayfiles]$ echo ${MPIRUN} -np ${NPROC} -hostfile $i{ABSDIR}/hostlist -mca btl sm,openib,self --mca btl_openib_use_srq 1 ./hrm &gt;&gt; ${OUTFILE}_hrm 2&gt;&amp;1
</span><br>
<span class="quotelev2">&gt; &gt; [pmdtest_at_pmd02 d00_dayfiles]$
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Because you used &gt;&gt; and 2&gt;&amp;1, the output when to your ${OUTFILE}_hrm file, not stdout.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18630/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18631.php">Pinero, Pedro_jose: "Re: [OMPI users] Very slow MPI_GATHER"</a>
<li><strong>Previous message:</strong> <a href="18629.php">Jingcha Joba: "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/02/18624.php">Syed Ahsan Ali: "Re: [OMPI users] Could not execute the executable &quot;/home/MET/hrm/bin/hostlist&quot;: Exec format error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/02/18592.php">Jeffrey Squyres: "Re: [OMPI users] Could not execute the executable&quot;/home/MET/hrm/bin/hostlist&quot;: Exec format error"</a>
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
