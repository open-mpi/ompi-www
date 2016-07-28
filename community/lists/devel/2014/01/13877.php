<?
$subject_val = "Re: [OMPI devel] 1.7.4rc: yet another launch failure";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 23 10:35:11 2014" -->
<!-- isoreceived="20140123153511" -->
<!-- sent="Thu, 23 Jan 2014 08:35:10 -0700" -->
<!-- isosent="20140123153510" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc: yet another launch failure" -->
<!-- id="20140123153510.GM31559_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EA32F943-98B9-46FC-96E8-7767BA26134F_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.4rc: yet another launch failure<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-23 10:35:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13878.php">Nathan Hjelm: "Re: [OMPI devel] build failure in trunk"</a>
<li><strong>Previous message:</strong> <a href="13876.php">Adrian Reber: "[OMPI devel] [PATCH] use ORTE_PROC_IS_APP"</a>
<li><strong>In reply to:</strong> <a href="13866.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc: yet another launch failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13909.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc: yet another launch failure"</a>
<li><strong>Reply:</strong> <a href="13909.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc: yet another launch failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I agree. A configure option to disable the use of getpwuid would be
<br>
great as it is one of those functions that can never be static. getpwuid
<br>
also fails for no particular reason on at least one XC30.
<br>
<p>-Nathan
<br>
<p>On Wed, Jan 22, 2014 at 08:57:20PM -0800, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt;    Interesting - still, I see no reason for OMPI to fail just because of
</span><br>
<span class="quotelev1">&gt;    that. We can run just fine with the uid, so I'll make things a little more
</span><br>
<span class="quotelev1">&gt;    flexible.
</span><br>
<span class="quotelev1">&gt;    Thanks for tracking it down!
</span><br>
<span class="quotelev1">&gt;    On Jan 22, 2014, at 7:54 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Not lacking getpwuid():
</span><br>
<span class="quotelev1">&gt;      [phh1_at_biou2 BLD]$ grep HAVE_GETPWUID */include/*_config.h
</span><br>
<span class="quotelev1">&gt;      opal/include/opal_config.h:#define HAVE_GETPWUID 1
</span><br>
<span class="quotelev1">&gt;      I also can't see why the quoted code could fail.
</span><br>
<span class="quotelev1">&gt;      The following is working fine:
</span><br>
<span class="quotelev1">&gt;      [phh1_at_biou2 BLD]$ cat q.c
</span><br>
<span class="quotelev1">&gt;      #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;      #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt;      #include &lt;sys/types.h&gt;
</span><br>
<span class="quotelev1">&gt;      #include &lt;pwd.h&gt;
</span><br>
<span class="quotelev1">&gt;      int main(void) {
</span><br>
<span class="quotelev1">&gt;         uid_t uid = getuid();
</span><br>
<span class="quotelev1">&gt;         printf(&quot;uid = %d\n&quot;, (int)uid);
</span><br>
<span class="quotelev1">&gt;         struct passwd *p = getpwuid(uid); 
</span><br>
<span class="quotelev1">&gt;         if (p) printf(&quot;name = %s\n&quot;, p-&gt;pw_name);
</span><br>
<span class="quotelev1">&gt;         return 0;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      [phh1_at_biou2 BLD]$ gcc -std=c99 q.c &amp;&amp; ./a.out
</span><br>
<span class="quotelev1">&gt;      uid = 44154
</span><br>
<span class="quotelev1">&gt;      name = phh1
</span><br>
<span class="quotelev1">&gt;      HOWEVER, building for ILP32 target (as in the reported failure) fails:
</span><br>
<span class="quotelev1">&gt;      [phh1_at_biou2 BLD]$ gcc -m32 -std=c99 q.c &amp;&amp; ./a.out
</span><br>
<span class="quotelev1">&gt;      uid = 44154
</span><br>
<span class="quotelev1">&gt;      So, I am going to guess that this *is* a system misconfiguration (maybe
</span><br>
<span class="quotelev1">&gt;      missing the 32-bit foo.so for the appropriate nsswitch resolver?) just
</span><br>
<span class="quotelev1">&gt;      as the error message said.
</span><br>
<span class="quotelev1">&gt;      Sorry for the false alarm,
</span><br>
<span class="quotelev1">&gt;      -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      On Wed, Jan 22, 2014 at 7:36 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        Here is the offending code:
</span><br>
<span class="quotelev1">&gt;             /* get the name of the user */
</span><br>
<span class="quotelev1">&gt;            uid = getuid();
</span><br>
<span class="quotelev1">&gt;        #ifdef HAVE_GETPWUID
</span><br>
<span class="quotelev1">&gt;            pwdent = getpwuid(uid);
</span><br>
<span class="quotelev1">&gt;        #else
</span><br>
<span class="quotelev1">&gt;            pwdent = NULL;
</span><br>
<span class="quotelev1">&gt;        #endif
</span><br>
<span class="quotelev1">&gt;            if (NULL != pwdent) {
</span><br>
<span class="quotelev1">&gt;                user = strdup(pwdent-&gt;pw_name);
</span><br>
<span class="quotelev1">&gt;            } else {
</span><br>
<span class="quotelev1">&gt;                orte_show_help(&quot;help-orte-runtime.txt&quot;,
</span><br>
<span class="quotelev1">&gt;                               &quot;orte:session:dir:nopwname&quot;, true);
</span><br>
<span class="quotelev1">&gt;                return ORTE_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev1">&gt;            }
</span><br>
<span class="quotelev1">&gt;        Is it possible on this platform that you don't have getpwuid? I'm
</span><br>
<span class="quotelev1">&gt;        surprised at the code as we could just use the uid instead - not sure
</span><br>
<span class="quotelev1">&gt;        why this more stringent test was applied
</span><br>
<span class="quotelev1">&gt;        On Jan 22, 2014, at 7:02 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          On yet another test platform I see the following:
</span><br>
<span class="quotelev1">&gt;          $ mpirun -mca btl sm,self -np 1 examples/ring_c
</span><br>
<span class="quotelev1">&gt;          --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;          Open MPI was unable to obtain the username in order to create a path
</span><br>
<span class="quotelev1">&gt;          for its required temporary directories.  This type of error is
</span><br>
<span class="quotelev1">&gt;          usually
</span><br>
<span class="quotelev1">&gt;          caused by a transient failure of network-based authentication
</span><br>
<span class="quotelev1">&gt;          services
</span><br>
<span class="quotelev1">&gt;          (e.g., LDAP or NIS failure due to network congestion), but can also
</span><br>
<span class="quotelev1">&gt;          be
</span><br>
<span class="quotelev1">&gt;          an indication of system misconfiguration.
</span><br>
<span class="quotelev1">&gt;          Please consult your system administrator about these issues and try
</span><br>
<span class="quotelev1">&gt;          again.
</span><br>
<span class="quotelev1">&gt;          --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;          [biou2.rice.edu:30021] [[40214,0],0] ORTE_ERROR_LOG: Out of resource
</span><br>
<span class="quotelev1">&gt;          in file
</span><br>
<span class="quotelev1">&gt;          /home/phh1/SCRATCH/OMPI/openmpi-1.7-latest-linux-ppc32-xlc-11.1/openmpi-1.7.4rc2r30361/orte/util/session_dir.c
</span><br>
<span class="quotelev1">&gt;          at line 380
</span><br>
<span class="quotelev1">&gt;          [biou2.rice.edu:30021] [[40214,0],0] ORTE_ERROR_LOG: Out of resource
</span><br>
<span class="quotelev1">&gt;          in file
</span><br>
<span class="quotelev1">&gt;          /home/phh1/SCRATCH/OMPI/openmpi-1.7-latest-linux-ppc32-xlc-11.1/openmpi-1.7.4rc2r30361/orte/mca/ess/hnp/ess_hnp_module.c
</span><br>
<span class="quotelev1">&gt;          at line 599
</span><br>
<span class="quotelev1">&gt;          --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;          It looks like orte_init failed for some reason; your parallel
</span><br>
<span class="quotelev1">&gt;          process is
</span><br>
<span class="quotelev1">&gt;          likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt;          fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt;          environment problems.  This failure appears to be an internal
</span><br>
<span class="quotelev1">&gt;          failure;
</span><br>
<span class="quotelev1">&gt;          here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt;          Open MPI developer):
</span><br>
<span class="quotelev1">&gt;            orte_session_dir failed
</span><br>
<span class="quotelev1">&gt;            --&gt; Returned value Out of resource (-2) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt;          --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;          An &quot;-np 2&quot; run fails in the same manner.
</span><br>
<span class="quotelev1">&gt;          This is a production system and there is no problem with &quot;whoami&quot; or
</span><br>
<span class="quotelev1">&gt;          &quot;id&quot;, leaving me doubting the explanation provided by the error
</span><br>
<span class="quotelev1">&gt;          message.
</span><br>
<span class="quotelev1">&gt;          [phh1_at_biou2 ~]$ whoami
</span><br>
<span class="quotelev1">&gt;          phh1
</span><br>
<span class="quotelev1">&gt;          [phh1_at_biou2 ~]$ id
</span><br>
<span class="quotelev1">&gt;          uid=44154(phh1) gid=2016(hpc)
</span><br>
<span class="quotelev1">&gt;          groups=2016(hpc),3803(hpcusers),3805(sshgw),3808(biou)
</span><br>
<span class="quotelev1">&gt;          The &quot;ompi_info --all&quot; output is attached.
</span><br>
<span class="quotelev1">&gt;          Please let me know what additional info is needed.
</span><br>
<span class="quotelev1">&gt;          -Paul
</span><br>
<span class="quotelev1">&gt;          --
</span><br>
<span class="quotelev1">&gt;          Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt;          Future Technologies Group
</span><br>
<span class="quotelev1">&gt;          Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt;          Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;          &lt;biou2_info.txt.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;          devel mailing list
</span><br>
<span class="quotelev1">&gt;          devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;          <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        _______________________________________________
</span><br>
<span class="quotelev1">&gt;        devel mailing list
</span><br>
<span class="quotelev1">&gt;        devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;        <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      --
</span><br>
<span class="quotelev1">&gt;      Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt;      Future Technologies Group
</span><br>
<span class="quotelev1">&gt;      Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt;      Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;      _______________________________________________
</span><br>
<span class="quotelev1">&gt;      devel mailing list
</span><br>
<span class="quotelev1">&gt;      devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13877/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13878.php">Nathan Hjelm: "Re: [OMPI devel] build failure in trunk"</a>
<li><strong>Previous message:</strong> <a href="13876.php">Adrian Reber: "[OMPI devel] [PATCH] use ORTE_PROC_IS_APP"</a>
<li><strong>In reply to:</strong> <a href="13866.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc: yet another launch failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13909.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc: yet another launch failure"</a>
<li><strong>Reply:</strong> <a href="13909.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc: yet another launch failure"</a>
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
