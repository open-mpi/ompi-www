<?
$subject_val = "Re: [OMPI users] No core dump in some cases";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 11 20:58:14 2016" -->
<!-- isoreceived="20160512005814" -->
<!-- sent="Thu, 12 May 2016 09:58:13 +0900" -->
<!-- isosent="20160512005813" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] No core dump in some cases" -->
<!-- id="a6cad9d2-87cc-515f-f8f8-775aff973082_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAHXxYDgh_K_775c080GbHevpHdWXUE9F2rkKHX=vRuKsWZM=rg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] No core dump in some cases<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-11 20:58:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29178.php">dpchoudh .: "Re: [OMPI users] No core dump in some cases"</a>
<li><strong>Previous message:</strong> <a href="29176.php">dpchoudh .: "Re: [OMPI users] No core dump in some cases"</a>
<li><strong>In reply to:</strong> <a href="29176.php">dpchoudh .: "Re: [OMPI users] No core dump in some cases"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29178.php">dpchoudh .: "Re: [OMPI users] No core dump in some cases"</a>
<li><strong>Reply:</strong> <a href="29178.php">dpchoudh .: "Re: [OMPI users] No core dump in some cases"</a>
<li><strong>Reply:</strong> <a href="29213.php">Dave Love: "Re: [OMPI users] No core dump in some cases"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Are you sure ulimit -c unlimited is *really* applied on all hosts
<br>
<p><p>can you please run the simple program below and confirm that ?
<br>
<p><p>Cheers,
<br>
<p><p>Gilles
<br>
<p><p>#include &lt;sys/time.h&gt;
<br>
#include &lt;sys/resource.h&gt;
<br>
#include &lt;poll.h&gt;
<br>
#include &lt;stdio.h&gt;
<br>
<p>int main(int argc, char *argv[]) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct rlimit rlim;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char * c = (char *)0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;getrlimit(RLIMIT_CORE, &amp;rlim);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf (&quot;before MPI_Init : %d %d\n&quot;, rlim.rlim_cur, rlim.rlim_max);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;getrlimit(RLIMIT_CORE, &amp;rlim);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf (&quot;after MPI_Init : %d %d\n&quot;, rlim.rlim_cur, rlim.rlim_max);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*c = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p><p>On 5/12/2016 4:22 AM, dpchoudh . wrote:
<br>
<span class="quotelev1">&gt; Hello Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you for the advice. However, that did not seem to make any 
</span><br>
<span class="quotelev1">&gt; difference. Here is what I did (on the cluster that generates .btr 
</span><br>
<span class="quotelev1">&gt; files for core dumps):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [durga_at_smallMPI git]$ ompi_info --all | grep opal_signal
</span><br>
<span class="quotelev1">&gt;            MCA opal base: parameter &quot;opal_signal&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;6,7,8,11&quot;, data source: default, level: 3 user/all, type: string)
</span><br>
<span class="quotelev1">&gt; [durga_at_smallMPI git]$
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; According to &lt;bits/signum.h&gt;, signals 6.7,8,11 are this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define SIGABRT        6    /* Abort (ANSI).  */
</span><br>
<span class="quotelev1">&gt; #define    SIGBUS        7    /* BUS error (4.2 BSD).  */
</span><br>
<span class="quotelev1">&gt; #define    SIGFPE        8    /* Floating-point exception (ANSI).  */
</span><br>
<span class="quotelev1">&gt; #define    SIGSEGV        11    /* Segmentation violation (ANSI).  */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And thus I added the following just after MPI_Init()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;     signal(SIGABRT, SIG_DFL);
</span><br>
<span class="quotelev1">&gt;     signal(SIGBUS, SIG_DFL);
</span><br>
<span class="quotelev1">&gt;     signal(SIGFPE, SIG_DFL);
</span><br>
<span class="quotelev1">&gt;     signal(SIGSEGV, SIG_DFL);
</span><br>
<span class="quotelev1">&gt;     signal(SIGTERM, SIG_DFL);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (I added the 'SIGTERM' part later, just in case it would make a 
</span><br>
<span class="quotelev1">&gt; difference; i didn't)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The resulting code still generates .btr files instead of core files.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like the 'execinfo' MCA component is being used as the 
</span><br>
<span class="quotelev1">&gt; backtrace mechanism:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [durga_at_smallMPI git]$ ompi_info | grep backtrace
</span><br>
<span class="quotelev1">&gt;            MCA backtrace: execinfo (MCA v2.1.0, API v2.0.0, Component 
</span><br>
<span class="quotelev1">&gt; v3.0.0)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, I could not find any way to choose 'none' instead of 'execinfo'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And the strange thing is, on the cluster where regular core dump is 
</span><br>
<span class="quotelev1">&gt; happening, the output of
</span><br>
<span class="quotelev1">&gt; $ ompi_info | grep backtrace
</span><br>
<span class="quotelev1">&gt; is identical to the above. (Which kind of makes sense because they 
</span><br>
<span class="quotelev1">&gt; were created from the same source with the same configure options.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry to harp on this, but without a core file it is hard to debug the 
</span><br>
<span class="quotelev1">&gt; application (e.g. examine stack variables).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The surgeon general advises you to eat right, exercise regularly and 
</span><br>
<span class="quotelev1">&gt; quit ageing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, May 11, 2016 at 3:37 AM, Gilles Gouaillardet 
</span><br>
<span class="quotelev1">&gt; &lt;gilles.gouaillardet_at_[hidden] &lt;mailto:gilles.gouaillardet_at_[hidden]&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Durga,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     you might wanna try to restore the signal handler for other
</span><br>
<span class="quotelev1">&gt;     signals as well
</span><br>
<span class="quotelev1">&gt;     (SIGSEGV, SIGBUS, ...)
</span><br>
<span class="quotelev1">&gt;     ompi_info --all | grep opal_signal
</span><br>
<span class="quotelev1">&gt;     does list the signal you should restore the handler
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     only one backtrace component is built (out of several candidates :
</span><br>
<span class="quotelev1">&gt;     execinfo, none, printstack)
</span><br>
<span class="quotelev1">&gt;     nm -l libopen-pal.so | grep backtrace
</span><br>
<span class="quotelev1">&gt;     will hint you which component was built
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     your two similar distros might have different backtrace component
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Gus,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     btr is a plain text file with a back trace &quot;ala&quot; gdb
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Nathan,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     i did a 'grep btr' and could not find anything :-(
</span><br>
<span class="quotelev1">&gt;     opal_backtrace_buffer and opal_backtrace_print are only used with
</span><br>
<span class="quotelev1">&gt;     stderr.
</span><br>
<span class="quotelev1">&gt;     so i am puzzled who creates the tracefile name and where ...
</span><br>
<span class="quotelev1">&gt;     also, no stack is printed by default unless opal_abort_print_stack
</span><br>
<span class="quotelev1">&gt;     is true
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On Wed, May 11, 2016 at 3:43 PM, dpchoudh . &lt;dpchoudh_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:dpchoudh_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;     &gt; Hello Nathan
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Thank you for your response. Could you please be more specific?
</span><br>
<span class="quotelev1">&gt;     Adding the
</span><br>
<span class="quotelev2">&gt;     &gt; following after MPI_Init() does not seem to make a difference.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;     &gt;   signal(SIGABRT, SIG_DFL);
</span><br>
<span class="quotelev2">&gt;     &gt;   signal(SIGTERM, SIG_DFL);
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; I also find it puzzling that nearly identical OMPI distro
</span><br>
<span class="quotelev1">&gt;     running on a
</span><br>
<span class="quotelev2">&gt;     &gt; different machine shows different behaviour.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Best regards
</span><br>
<span class="quotelev2">&gt;     &gt; Durga
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; The surgeon general advises you to eat right, exercise regularly
</span><br>
<span class="quotelev1">&gt;     and quit
</span><br>
<span class="quotelev2">&gt;     &gt; ageing.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; On Tue, May 10, 2016 at 10:02 AM, Hjelm, Nathan Thomas
</span><br>
<span class="quotelev1">&gt;     &lt;hjelmn_at_[hidden] &lt;mailto:hjelmn_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; wrote:
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; btr files are indeed created by open mpi's backtrace mechanism.
</span><br>
<span class="quotelev1">&gt;     I think we
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; should revisit it at some point but for now the only effective
</span><br>
<span class="quotelev1">&gt;     way i have
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; found to prevent it is to restore the default signal handlers after
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; MPI_Init.
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; Excuse the quoting style. Good sucks.
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; ________________________________________
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; From: users on behalf of dpchoudh .
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; Sent: Monday, May 09, 2016 2:59:37 PM
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; Subject: Re: [OMPI users] No core dump in some cases
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; Hi Gus
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; Thanks for your suggestion. But I am not using any resource
</span><br>
<span class="quotelev1">&gt;     manager (i.e.
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; I am launching mpirun from the bash shell.). In fact, both of
</span><br>
<span class="quotelev1">&gt;     the two
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; clusters I talked about run CentOS 7 and I launch the job the
</span><br>
<span class="quotelev1">&gt;     same way on
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; both of these, yet one of them creates standard core files and
</span><br>
<span class="quotelev1">&gt;     the other
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; creates the 'btr; files. Strange thing is, I could not find
</span><br>
<span class="quotelev1">&gt;     anything on the
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; .btr (= Backtrace?) files on Google, which is any I asked on
</span><br>
<span class="quotelev1">&gt;     this forum.
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; Best regards
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; Durga
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; The surgeon general advises you to eat right, exercise
</span><br>
<span class="quotelev1">&gt;     regularly and quit
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; ageing.
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; On Mon, May 9, 2016 at 12:04 PM, Gus Correa
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; &lt;gus_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:gus_at_[hidden]&gt;&lt;mailto:gus_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:gus_at_[hidden]&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; Hi Durga
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; Just in case ...
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; If you're using a resource manager to start the jobs (Torque, etc),
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; you need to have them set the limits (for coredump size,
</span><br>
<span class="quotelev1">&gt;     stacksize, locked
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; memory size, etc).
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; This way the jobs will inherit the limits from the
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; resource manager daemon.
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; On Torque (which I use) I do this on the pbs_mom daemon
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; init script (I am still before the systemd era, that lovely POS).
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; And set the hard/soft limits on /etc/security/limits.conf as well.
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; I hope this helps,
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; Gus Correa
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; On 05/07/2016 12:27 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; I'm afraid I don't know what a .btr file is -- that is not
</span><br>
<span class="quotelev1">&gt;     something that
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; is controlled by Open MPI.
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; You might want to look into your OS settings to see if it has
</span><br>
<span class="quotelev1">&gt;     some kind of
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; alternate corefile mechanism...?
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; On May 6, 2016, at 8:58 PM, dpchoudh .
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; &lt;dpchoudh_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:dpchoudh_at_[hidden]&gt;&lt;mailto:dpchoudh_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:dpchoudh_at_[hidden]&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; Hello all
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; I run MPI jobs (for test purpose only) on two different
</span><br>
<span class="quotelev1">&gt;     'clusters'. Both
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; 'clusters' have two nodes only, connected back-to-back. The two
</span><br>
<span class="quotelev1">&gt;     are very
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; similar, but not identical, both software and hardware wise.
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; Both have ulimit -c set to unlimited. However, only one of the
</span><br>
<span class="quotelev1">&gt;     two creates
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; core files when an MPI job crashes. The other creates a text
</span><br>
<span class="quotelev1">&gt;     file named
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; something like
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &lt;program_name_that_crashed&gt;.80s-&lt;a-number-that-looks-like-a-PID&gt;,&lt;hostname-where-the-crash-happened&gt;.btr
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; I'd much prefer a core file because that allows me to debug
</span><br>
<span class="quotelev1">&gt;     with a lot
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; more options than a static text file with addresses. How do I
</span><br>
<span class="quotelev1">&gt;     get a core
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; file in all situations? I am using MPI source from the master
</span><br>
<span class="quotelev1">&gt;     branch.
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; Thanks in advance
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; Durga
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; The surgeon general advises you to eat right, exercise
</span><br>
<span class="quotelev1">&gt;     regularly and quit
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; ageing.
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29124.php">http://www.open-mpi.org/community/lists/users/2016/05/29124.php</a>
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29141.php">http://www.open-mpi.org/community/lists/users/2016/05/29141.php</a>
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29154.php">http://www.open-mpi.org/community/lists/users/2016/05/29154.php</a>
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;     &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;     &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;     &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;     &gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29169.php">http://www.open-mpi.org/community/lists/users/2016/05/29169.php</a>
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2016/05/29170.php">http://www.open-mpi.org/community/lists/users/2016/05/29170.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29176.php">http://www.open-mpi.org/community/lists/users/2016/05/29176.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29177/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29178.php">dpchoudh .: "Re: [OMPI users] No core dump in some cases"</a>
<li><strong>Previous message:</strong> <a href="29176.php">dpchoudh .: "Re: [OMPI users] No core dump in some cases"</a>
<li><strong>In reply to:</strong> <a href="29176.php">dpchoudh .: "Re: [OMPI users] No core dump in some cases"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29178.php">dpchoudh .: "Re: [OMPI users] No core dump in some cases"</a>
<li><strong>Reply:</strong> <a href="29178.php">dpchoudh .: "Re: [OMPI users] No core dump in some cases"</a>
<li><strong>Reply:</strong> <a href="29213.php">Dave Love: "Re: [OMPI users] No core dump in some cases"</a>
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
