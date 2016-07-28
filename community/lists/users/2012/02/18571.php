<?
$subject_val = "Re: [OMPI users] Could not execute the executable &quot;/home/MET/hrm/bin/hostlist&quot;: Exec format error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 28 04:21:51 2012" -->
<!-- isoreceived="20120228092151" -->
<!-- sent="Tue, 28 Feb 2012 02:21:42 -0700" -->
<!-- isosent="20120228092142" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Could not execute the executable &amp;quot;/home/MET/hrm/bin/hostlist&amp;quot;: Exec format error" -->
<!-- id="145923C8-CAA2-4E3F-8C01-D3309E8C93C8_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAMvdAsLGm63JSzgmdKcSN=8HwKusAg9iiwFVWrWNBpCp8T=uFA_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-28 04:21:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18572.php">Ralph Castain: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>Previous message:</strong> <a href="18570.php">Abhinav Sarje: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>In reply to:</strong> <a href="18569.php">Syed Ahsan Ali: "Re: [OMPI users] Could not execute the executable &quot;/home/MET/hrm/bin/hostlist&quot;: Exec format error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18573.php">Reuti: "Re: [OMPI users] Could not execute the executable &quot;/home/MET/hrm/bin/hostlist&quot;: Exec format error"</a>
<li><strong>Reply:</strong> <a href="18573.php">Reuti: "Re: [OMPI users] Could not execute the executable &quot;/home/MET/hrm/bin/hostlist&quot;: Exec format error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Afraid I have to agree with the prior reply - sounds like NPROC isn't getting defined, which causes your cmd line to look like your original posting.
<br>
<p><p>On Feb 27, 2012, at 10:29 PM, Syed Ahsan Ali wrote:
<br>
<p><span class="quotelev1">&gt; The following command in used in script for job submission
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; ${MPIRUN} -np ${NPROC} -hostfile ${ABSDIR}/hostlist -mca btl sm,openib,self --mca btl_openib_use_srq 1 ./hrm &gt;&gt; ${OUTFILE}_hrm 2&gt;&amp;1
</span><br>
<span class="quotelev1">&gt; where NPROC in defined in someother file. The same application is running on the other system with same configuration.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Feb 28, 2012 at 10:12 AM, PukkiMonkey &lt;pukkimonkey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;  No of processes missing after -np
</span><br>
<span class="quotelev1">&gt; Should be something like:
</span><br>
<span class="quotelev1">&gt; mpirun -np 256 ./exec
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sent from my iPhone
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 27, 2012, at 8:47 PM, Syed Ahsan Ali &lt;ahsanshah01_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Dear All,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am running an application with mpirun but it gives following error, it is not picking up hostlist, there are other applications which run well with hostlist but it just gives following error with 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [pmdtest_at_pmd02 d00_dayfiles]$ tail -f *_hrm
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np  /home/MET/hrm/bin/hrm
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Could not execute the executable &quot;/home/MET/hrm/bin/hostlist&quot;: Exec format error
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This could mean that your PATH or executable name is wrong, or that you do not
</span><br>
<span class="quotelev2">&gt;&gt; have the necessary permissions.  Please ensure that the executable is able to be
</span><br>
<span class="quotelev2">&gt;&gt; found and executed.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Following the permission of the hostlist directory. Please help me to remove this error.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [pmdtest_at_pmd02 bin]$ ll
</span><br>
<span class="quotelev2">&gt;&gt; total 7570
</span><br>
<span class="quotelev2">&gt;&gt; -rwxrwxrwx 1 pmdtest pmdtest 2517815 Feb 16  2012 gme2hrm
</span><br>
<span class="quotelev2">&gt;&gt; -rwxrwxrwx 1 pmdtest pmdtest       0 Feb 16  2012 gme2hrm.map
</span><br>
<span class="quotelev2">&gt;&gt; -rwxrwxrwx 1 pmdtest pmdtest     473 Jan 30  2012 hostlist
</span><br>
<span class="quotelev2">&gt;&gt; -rwxrwxrwx 1 pmdtest pmdtest 5197698 Feb 16  2012 hrm
</span><br>
<span class="quotelev2">&gt;&gt; -rwxrwxrwx 1 pmdtest pmdtest       0 Dec 31  2010 hrm.map
</span><br>
<span class="quotelev2">&gt;&gt; -rwxrwxrwx 1 pmdtest pmdtest    1680 Dec 31  2010 mpd.hosts
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thank you and Regards
</span><br>
<span class="quotelev2">&gt;&gt; Ahsan
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18571/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18572.php">Ralph Castain: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>Previous message:</strong> <a href="18570.php">Abhinav Sarje: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>In reply to:</strong> <a href="18569.php">Syed Ahsan Ali: "Re: [OMPI users] Could not execute the executable &quot;/home/MET/hrm/bin/hostlist&quot;: Exec format error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18573.php">Reuti: "Re: [OMPI users] Could not execute the executable &quot;/home/MET/hrm/bin/hostlist&quot;: Exec format error"</a>
<li><strong>Reply:</strong> <a href="18573.php">Reuti: "Re: [OMPI users] Could not execute the executable &quot;/home/MET/hrm/bin/hostlist&quot;: Exec format error"</a>
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
