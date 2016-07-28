<?
$subject_val = "Re: [OMPI users] Could not execute the executable &quot;/home/MET/hrm/bin/hostlist&quot;: Exec format error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 29 01:15:45 2012" -->
<!-- isoreceived="20120229061545" -->
<!-- sent="Wed, 29 Feb 2012 11:15:39 +0500" -->
<!-- isosent="20120229061539" -->
<!-- name="Syed Ahsan Ali" -->
<!-- email="ahsanshah01_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Could not execute the executable &amp;quot;/home/MET/hrm/bin/hostlist&amp;quot;: Exec format error" -->
<!-- id="CAMvdAsLr46CayChYS77Me2BSHG8Q31Yyq=wviYBR7KaJxxeA-A_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9016FAF0-2044-4A90-8F40-6E39996503CA_at_cisco.com" -->
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
<strong>From:</strong> Syed Ahsan Ali (<em>ahsanshah01_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-29 01:15:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18586.php">Jingcha Joba: "Re: [OMPI users] Could not execute the executable &quot;/home/MET/hrm/bin/hostlist&quot;: Exec format error"</a>
<li><strong>Previous message:</strong> <a href="18584.php">Jeffrey Squyres: "Re: [OMPI users] orted daemon no found! --- environment not passed to slave nodes?"</a>
<li><strong>In reply to:</strong> <a href="18575.php">Jeffrey Squyres: "Re: [OMPI users] Could not execute the executable &quot;/home/MET/hrm/bin/hostlist&quot;: Exec format error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18586.php">Jingcha Joba: "Re: [OMPI users] Could not execute the executable &quot;/home/MET/hrm/bin/hostlist&quot;: Exec format error"</a>
<li><strong>Reply:</strong> <a href="18586.php">Jingcha Joba: "Re: [OMPI users] Could not execute the executable &quot;/home/MET/hrm/bin/hostlist&quot;: Exec format error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
After creating new hostlist and making the scripts again it is working now
<br>
and picking up the hostlist as u can see :
<br>
<p>*${MPIRUN} -np ${NPROC} -hostfile ${ABSDIR}/hostlist -mca btl
<br>
sm,openib,self --mca btl_openib_use_srq 1 ./hrm &gt;&gt; ${OUTFILE}_hrm 2&gt;&amp;1
<br>
(The above command is used to submit job)*
<br>
<p>*[pmdtest_at_pmd02 d00_dayfiles]$ tail -f *_hrm
<br>
mpirun -np 32 /home/MET/hrm/bin/hrm
<br>
*
<br>
but it just stays on this command and the model simulation don't start
<br>
further. I can't understand this behavior because the simulation works
<br>
fine when hostlist is not given as follows:
<br>
<p>*    ${MPIRUN} -np ${NPROC} ./hrm &gt;&gt; ${OUTFILE}_hrm 2&gt;&amp;1*
<br>
<p>**
<br>
**
<br>
*
<br>
<p>*
<br>
On Tue, Feb 28, 2012 at 3:49 PM, Jeffrey Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Yes, this is known behavior for our CLI parser.  We could probably improve
</span><br>
<span class="quotelev1">&gt; that a bit...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 28, 2012, at 4:55 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Feb 28, 2012, at 2:52 AM, Reuti wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Am 28.02.2012 um 10:21 schrieb Ralph Castain:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Afraid I have to agree with the prior reply - sounds like NPROC isn't
</span><br>
<span class="quotelev1">&gt; getting defined, which causes your cmd line to look like your original
</span><br>
<span class="quotelev1">&gt; posting.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Maybe the best to investigate this is to `echo` $MPIRUN and $NPROC.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; But: is this the intended behavior of mpirun? It looks like -np is
</span><br>
<span class="quotelev1">&gt; eating -hostlist as a numeric argument? Shouldn't it complain about:
</span><br>
<span class="quotelev1">&gt; argument for -np missing or argument not being numeric?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Probably - I'm sure that the atol is returning zero, which should cause
</span><br>
<span class="quotelev1">&gt; an error output. I'll check.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -- Reuti
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Feb 27, 2012, at 10:29 PM, Syed Ahsan Ali wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; The following command in used in script for job submission
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ${MPIRUN} -np ${NPROC} -hostfile ${ABSDIR}/hostlist -mca btl
</span><br>
<span class="quotelev1">&gt; sm,openib,self --mca btl_openib_use_srq 1 ./hrm &gt;&gt; ${OUTFILE}_hrm 2&gt;&amp;1
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; where NPROC in defined in someother file. The same application is
</span><br>
<span class="quotelev1">&gt; running on the other system with same configuration.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On Tue, Feb 28, 2012 at 10:12 AM, PukkiMonkey &lt;pukkimonkey_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; No of processes missing after -np
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Should be something like:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; mpirun -np 256 ./exec
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Sent from my iPhone
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On Feb 27, 2012, at 8:47 PM, Syed Ahsan Ali &lt;ahsanshah01_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Dear All,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I am running an application with mpirun but it gives following
</span><br>
<span class="quotelev1">&gt; error, it is not picking up hostlist, there are other applications which
</span><br>
<span class="quotelev1">&gt; run well with hostlist but it just gives following error with
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [pmdtest_at_pmd02 d00_dayfiles]$ tail -f *_hrm
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; mpirun -np  /home/MET/hrm/bin/hrm
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Could not execute the executable &quot;/home/MET/hrm/bin/hostlist&quot;: Exec
</span><br>
<span class="quotelev1">&gt; format error
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; This could mean that your PATH or executable name is wrong, or that
</span><br>
<span class="quotelev1">&gt; you do not
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; have the necessary permissions.  Please ensure that the executable
</span><br>
<span class="quotelev1">&gt; is able to be
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; found and executed.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Following the permission of the hostlist directory. Please help me
</span><br>
<span class="quotelev1">&gt; to remove this error.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [pmdtest_at_pmd02 bin]$ ll
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; total 7570
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; -rwxrwxrwx 1 pmdtest pmdtest 2517815 Feb 16  2012 gme2hrm
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; -rwxrwxrwx 1 pmdtest pmdtest       0 Feb 16  2012 gme2hrm.map
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; -rwxrwxrwx 1 pmdtest pmdtest     473 Jan 30  2012 hostlist
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; -rwxrwxrwx 1 pmdtest pmdtest 5197698 Feb 16  2012 hrm
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; -rwxrwxrwx 1 pmdtest pmdtest       0 Dec 31  2010 hrm.map
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; -rwxrwxrwx 1 pmdtest pmdtest    1680 Dec 31  2010 mpd.hosts
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Thank you and Regards
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Ahsan
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Syed Ahsan Ali Bokhari
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Electronic Engineer (EE)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Research &amp; Development Division
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Pakistan Meteorological Department H-8/4, Islamabad.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Phone # off  +92518358714
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Cell # +923155145014
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18585/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18586.php">Jingcha Joba: "Re: [OMPI users] Could not execute the executable &quot;/home/MET/hrm/bin/hostlist&quot;: Exec format error"</a>
<li><strong>Previous message:</strong> <a href="18584.php">Jeffrey Squyres: "Re: [OMPI users] orted daemon no found! --- environment not passed to slave nodes?"</a>
<li><strong>In reply to:</strong> <a href="18575.php">Jeffrey Squyres: "Re: [OMPI users] Could not execute the executable &quot;/home/MET/hrm/bin/hostlist&quot;: Exec format error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18586.php">Jingcha Joba: "Re: [OMPI users] Could not execute the executable &quot;/home/MET/hrm/bin/hostlist&quot;: Exec format error"</a>
<li><strong>Reply:</strong> <a href="18586.php">Jingcha Joba: "Re: [OMPI users] Could not execute the executable &quot;/home/MET/hrm/bin/hostlist&quot;: Exec format error"</a>
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
