<?
$subject_val = "Re: [OMPI users] Could not execute the executable &quot;/home/MET/hrm/bin/hostlist&quot;: Exec format error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 29 02:42:52 2012" -->
<!-- isoreceived="20120229074252" -->
<!-- sent="Tue, 28 Feb 2012 23:42:26 -0800" -->
<!-- isosent="20120229074226" -->
<!-- name="Jingcha Joba" -->
<!-- email="pukkimonkey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Could not execute the executable &amp;quot;/home/MET/hrm/bin/hostlist&amp;quot;: Exec format error" -->
<!-- id="CAOf_+-Xm2eLDWa15SF7QygOJjbEv_jWYB-r2BnE_F3V-wKaxEw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Jingcha Joba (<em>pukkimonkey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-29 02:42:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18589.php">Muhammad Wahaj Sethi: "Re: [OMPI users] mpirun fails with no allocated resources"</a>
<li><strong>Previous message:</strong> <a href="18587.php">Syed Ahsan Ali: "Re: [OMPI users] Could not execute the executable &quot;/home/MET/hrm/bin/hostlist&quot;: Exec format error"</a>
<li><strong>In reply to:</strong> <a href="18587.php">Syed Ahsan Ali: "Re: [OMPI users] Could not execute the executable &quot;/home/MET/hrm/bin/hostlist&quot;: Exec format error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18593.php">Jeffrey Squyres: "Re: [OMPI users] Could not execute the executable &quot;/home/MET/hrm/bin/hostlist&quot;: Exec format error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, it should be
<br>
echo *&quot;*mpirun.....* &quot;, *
<br>
I just noticed that you have $i{ABSDIR}. I think should it be ${ABSDIR}.
<br>
On Tue, Feb 28, 2012 at 11:17 PM, Syed Ahsan Ali &lt;ahsanshah01_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; I tried to echo but it returns nothing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [pmdtest_at_pmd02 d00_dayfiles]$ echo ${MPIRUN} -np ${NPROC} -hostfile
</span><br>
<span class="quotelev1">&gt; $i{ABSDIR}/hostlist -mca btl sm,openib,self --mca btl_openib_use_srq 1
</span><br>
<span class="quotelev1">&gt; ./hrm &gt;&gt; ${OUTFILE}_hrm 2&gt;&amp;1
</span><br>
<span class="quotelev1">&gt; [pmdtest_at_pmd02 d00_dayfiles]$
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Feb 29, 2012 at 12:01 PM, Jingcha Joba &lt;pukkimonkey_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Just to be sure, can u try
</span><br>
<span class="quotelev2">&gt;&gt; echo &quot;${MPIRUN} -np ${NPROC} -hostfile ${ABSDIR}/hostlist -mca btl
</span><br>
<span class="quotelev2">&gt;&gt; sm,openib,self --mca btl_openib_use_srq 1 ./hrm &gt;&gt; ${OUTFILE}_hrm 2&gt;&amp;1&quot;
</span><br>
<span class="quotelev2">&gt;&gt; and check if you are indeed getting the correct argument.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If that looks fine, can u add --mca btl_openib_verbose 1 to the mpirun
</span><br>
<span class="quotelev2">&gt;&gt; argument list, and see what it says?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Feb 28, 2012 at 10:15 PM, Syed Ahsan Ali &lt;ahsanshah01_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; After creating new hostlist and making the scripts again it is working
</span><br>
<span class="quotelev3">&gt;&gt;&gt; now and picking up the hostlist as u can see :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ${MPIRUN} -np ${NPROC} -hostfile ${ABSDIR}/hostlist -mca btl
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sm,openib,self --mca btl_openib_use_srq 1 ./hrm &gt;&gt; ${OUTFILE}_hrm 2&gt;&amp;1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (The above command is used to submit job)*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pmdtest_at_pmd02 d00_dayfiles]$ tail -f *_hrm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -np 32 /home/MET/hrm/bin/hrm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but it just stays on this command and the model simulation don't start
</span><br>
<span class="quotelev3">&gt;&gt;&gt; further. I can't understand this behavior because the simulation works
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fine when hostlist is not given as follows:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *    ${MPIRUN} -np ${NPROC} ./hrm &gt;&gt; ${OUTFILE}_hrm 2&gt;&amp;1*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; **
</span><br>
<span class="quotelev3">&gt;&gt;&gt; **
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * *
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Tue, Feb 28, 2012 at 3:49 PM, Jeffrey Squyres &lt;jsquyres_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Yes, this is known behavior for our CLI parser.  We could probably
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; improve that a bit...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Feb 28, 2012, at 4:55 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; On Feb 28, 2012, at 2:52 AM, Reuti wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; Am 28.02.2012 um 10:21 schrieb Ralph Castain:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; Afraid I have to agree with the prior reply - sounds like NPROC
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; isn't getting defined, which causes your cmd line to look like your
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; original posting.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; Maybe the best to investigate this is to `echo` $MPIRUN and $NPROC.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; But: is this the intended behavior of mpirun? It looks like -np is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; eating -hostlist as a numeric argument? Shouldn't it complain about:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; argument for -np missing or argument not being numeric?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Probably - I'm sure that the atol is returning zero, which should
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cause an error output. I'll check.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; -- Reuti
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; On Feb 27, 2012, at 10:29 PM, Syed Ahsan Ali wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; The following command in used in script for job submission
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; ${MPIRUN} -np ${NPROC} -hostfile ${ABSDIR}/hostlist -mca btl
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sm,openib,self --mca btl_openib_use_srq 1 ./hrm &gt;&gt; ${OUTFILE}_hrm 2&gt;&amp;1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; where NPROC in defined in someother file. The same application is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; running on the other system with same configuration.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; On Tue, Feb 28, 2012 at 10:12 AM, PukkiMonkey &lt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pukkimonkey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; No of processes missing after -np
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; Should be something like:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; mpirun -np 256 ./exec
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; Sent from my iPhone
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; On Feb 27, 2012, at 8:47 PM, Syed Ahsan Ali &lt;ahsanshah01_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; Dear All,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; I am running an application with mpirun but it gives following
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; error, it is not picking up hostlist, there are other applications which
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; run well with hostlist but it just gives following error with
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; [pmdtest_at_pmd02 d00_dayfiles]$ tail -f *_hrm
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; mpirun -np  /home/MET/hrm/bin/hrm
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; Could not execute the executable &quot;/home/MET/hrm/bin/hostlist&quot;:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Exec format error
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; This could mean that your PATH or executable name is wrong, or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that you do not
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; have the necessary permissions.  Please ensure that the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; executable is able to be
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; found and executed.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; Following the permission of the hostlist directory. Please help
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; me to remove this error.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; [pmdtest_at_pmd02 bin]$ ll
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; total 7570
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; -rwxrwxrwx 1 pmdtest pmdtest 2517815 Feb 16  2012 gme2hrm
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; -rwxrwxrwx 1 pmdtest pmdtest       0 Feb 16  2012 gme2hrm.map
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; -rwxrwxrwx 1 pmdtest pmdtest     473 Jan 30  2012 hostlist
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; -rwxrwxrwx 1 pmdtest pmdtest 5197698 Feb 16  2012 hrm
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; -rwxrwxrwx 1 pmdtest pmdtest       0 Dec 31  2010 hrm.map
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; -rwxrwxrwx 1 pmdtest pmdtest    1680 Dec 31  2010 mpd.hosts
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; Thank you and Regards
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; Ahsan
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; Syed Ahsan Ali Bokhari
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; Electronic Engineer (EE)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; Research &amp; Development Division
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; Pakistan Meteorological Department H-8/4, Islamabad.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; Phone # off  +92518358714
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; Cell # +923155145014
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Syed Ahsan Ali Bokhari
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Electronic Engineer (EE)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Research &amp; Development Division
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pakistan Meteorological Department H-8/4, Islamabad.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Phone # off  +92518358714
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cell # +923155145014
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18588/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18589.php">Muhammad Wahaj Sethi: "Re: [OMPI users] mpirun fails with no allocated resources"</a>
<li><strong>Previous message:</strong> <a href="18587.php">Syed Ahsan Ali: "Re: [OMPI users] Could not execute the executable &quot;/home/MET/hrm/bin/hostlist&quot;: Exec format error"</a>
<li><strong>In reply to:</strong> <a href="18587.php">Syed Ahsan Ali: "Re: [OMPI users] Could not execute the executable &quot;/home/MET/hrm/bin/hostlist&quot;: Exec format error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18593.php">Jeffrey Squyres: "Re: [OMPI users] Could not execute the executable &quot;/home/MET/hrm/bin/hostlist&quot;: Exec format error"</a>
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
