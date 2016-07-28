<?
$subject_val = "Re: [OMPI users] Could not execute the executable &quot;/home/MET/hrm/bin/hostlist&quot;: Exec format error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 29 06:27:16 2012" -->
<!-- isoreceived="20120229112716" -->
<!-- sent="Wed, 29 Feb 2012 06:27:11 -0500" -->
<!-- isosent="20120229112711" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Could not execute the executable &amp;quot;/home/MET/hrm/bin/hostlist&amp;quot;: Exec format error" -->
<!-- id="F7E26758-F070-4309-942F-30F436F88B72_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAMvdAs+UtxeHddDFPXwPhn=xpMUxTqzEL6hF5v6eWOHRW4VcAA_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-29 06:27:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18594.php">Jeffrey Squyres: "Re: [OMPI users] Drastic OpenMPI performance reduction when message exeeds 128 KB"</a>
<li><strong>Previous message:</strong> <a href="18592.php">Jeffrey Squyres: "Re: [OMPI users] Could not execute the executable&quot;/home/MET/hrm/bin/hostlist&quot;: Exec format error"</a>
<li><strong>In reply to:</strong> <a href="18587.php">Syed Ahsan Ali: "Re: [OMPI users] Could not execute the executable &quot;/home/MET/hrm/bin/hostlist&quot;: Exec format error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18624.php">Syed Ahsan Ali: "Re: [OMPI users] Could not execute the executable &quot;/home/MET/hrm/bin/hostlist&quot;: Exec format error"</a>
<li><strong>Reply:</strong> <a href="18624.php">Syed Ahsan Ali: "Re: [OMPI users] Could not execute the executable &quot;/home/MET/hrm/bin/hostlist&quot;: Exec format error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 29, 2012, at 2:17 AM, Syed Ahsan Ali wrote:
<br>
<p><span class="quotelev1">&gt; [pmdtest_at_pmd02 d00_dayfiles]$ echo ${MPIRUN} -np ${NPROC} -hostfile $i{ABSDIR}/hostlist -mca btl sm,openib,self --mca btl_openib_use_srq 1 ./hrm &gt;&gt; ${OUTFILE}_hrm 2&gt;&amp;1
</span><br>
<span class="quotelev1">&gt; [pmdtest_at_pmd02 d00_dayfiles]$ 
</span><br>
<p>Because you used &gt;&gt; and 2&gt;&amp;1, the output when to your ${OUTFILE}_hrm file, not stdout.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18594.php">Jeffrey Squyres: "Re: [OMPI users] Drastic OpenMPI performance reduction when message exeeds 128 KB"</a>
<li><strong>Previous message:</strong> <a href="18592.php">Jeffrey Squyres: "Re: [OMPI users] Could not execute the executable&quot;/home/MET/hrm/bin/hostlist&quot;: Exec format error"</a>
<li><strong>In reply to:</strong> <a href="18587.php">Syed Ahsan Ali: "Re: [OMPI users] Could not execute the executable &quot;/home/MET/hrm/bin/hostlist&quot;: Exec format error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18624.php">Syed Ahsan Ali: "Re: [OMPI users] Could not execute the executable &quot;/home/MET/hrm/bin/hostlist&quot;: Exec format error"</a>
<li><strong>Reply:</strong> <a href="18624.php">Syed Ahsan Ali: "Re: [OMPI users] Could not execute the executable &quot;/home/MET/hrm/bin/hostlist&quot;: Exec format error"</a>
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
