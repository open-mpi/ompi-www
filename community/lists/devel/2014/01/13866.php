<?
$subject_val = "Re: [OMPI devel] 1.7.4rc: yet another launch failure";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 22 23:58:04 2014" -->
<!-- isoreceived="20140123045804" -->
<!-- sent="Wed, 22 Jan 2014 20:57:20 -0800" -->
<!-- isosent="20140123045720" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc: yet another launch failure" -->
<!-- id="EA32F943-98B9-46FC-96E8-7767BA26134F_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA17ZvgXhc6rGqCOiiQWsqTZ40uuEONODthN8+xeXV7QnXg_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-22 23:57:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13867.php">Paul Hargrove: "[OMPI devel] trunk and v1.7: xlc and lost atomics patch"</a>
<li><strong>Previous message:</strong> <a href="13865.php">Irvanda Kurniadi: "[OMPI devel] Unknown object files in libmpi.a"</a>
<li><strong>In reply to:</strong> <a href="13863.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: yet another launch failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13877.php">Nathan Hjelm: "Re: [OMPI devel] 1.7.4rc: yet another launch failure"</a>
<li><strong>Reply:</strong> <a href="13877.php">Nathan Hjelm: "Re: [OMPI devel] 1.7.4rc: yet another launch failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Interesting - still, I see no reason for OMPI to fail just because of that. We can run just fine with the uid, so I'll make things a little more flexible.
<br>
<p>Thanks for tracking it down!
<br>
<p>On Jan 22, 2014, at 7:54 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Not lacking getpwuid():
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [phh1_at_biou2 BLD]$ grep HAVE_GETPWUID */include/*_config.h
</span><br>
<span class="quotelev1">&gt; opal/include/opal_config.h:#define HAVE_GETPWUID 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I also can't see why the quoted code could fail.
</span><br>
<span class="quotelev1">&gt; The following is working fine:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [phh1_at_biou2 BLD]$ cat q.c
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;sys/types.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;pwd.h&gt;
</span><br>
<span class="quotelev1">&gt; int main(void) {
</span><br>
<span class="quotelev1">&gt;    uid_t uid = getuid();
</span><br>
<span class="quotelev1">&gt;    printf(&quot;uid = %d\n&quot;, (int)uid);
</span><br>
<span class="quotelev1">&gt;    struct passwd *p = getpwuid(uid); 
</span><br>
<span class="quotelev1">&gt;    if (p) printf(&quot;name = %s\n&quot;, p-&gt;pw_name);
</span><br>
<span class="quotelev1">&gt;    return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [phh1_at_biou2 BLD]$ gcc -std=c99 q.c &amp;&amp; ./a.out
</span><br>
<span class="quotelev1">&gt; uid = 44154
</span><br>
<span class="quotelev1">&gt; name = phh1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; HOWEVER, building for ILP32 target (as in the reported failure) fails:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [phh1_at_biou2 BLD]$ gcc -m32 -std=c99 q.c &amp;&amp; ./a.out
</span><br>
<span class="quotelev1">&gt; uid = 44154
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, I am going to guess that this *is* a system misconfiguration (maybe missing the 32-bit foo.so for the appropriate nsswitch resolver?) just as the error message said.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry for the false alarm,
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Jan 22, 2014 at 7:36 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Here is the offending code:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      /* get the name of the user */
</span><br>
<span class="quotelev1">&gt;     uid = getuid();
</span><br>
<span class="quotelev1">&gt; #ifdef HAVE_GETPWUID
</span><br>
<span class="quotelev1">&gt;     pwdent = getpwuid(uid);
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt;     pwdent = NULL;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;     if (NULL != pwdent) {
</span><br>
<span class="quotelev1">&gt;         user = strdup(pwdent-&gt;pw_name);
</span><br>
<span class="quotelev1">&gt;     } else {
</span><br>
<span class="quotelev1">&gt;         orte_show_help(&quot;help-orte-runtime.txt&quot;,
</span><br>
<span class="quotelev1">&gt;                        &quot;orte:session:dir:nopwname&quot;, true);
</span><br>
<span class="quotelev1">&gt;         return ORTE_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is it possible on this platform that you don't have getpwuid? I'm surprised at the code as we could just use the uid instead - not sure why this more stringent test was applied
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 22, 2014, at 7:02 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On yet another test platform I see the following:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun -mca btl sm,self -np 1 examples/ring_c
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI was unable to obtain the username in order to create a path
</span><br>
<span class="quotelev2">&gt;&gt; for its required temporary directories.  This type of error is usually
</span><br>
<span class="quotelev2">&gt;&gt; caused by a transient failure of network-based authentication services
</span><br>
<span class="quotelev2">&gt;&gt; (e.g., LDAP or NIS failure due to network congestion), but can also be
</span><br>
<span class="quotelev2">&gt;&gt; an indication of system misconfiguration.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Please consult your system administrator about these issues and try
</span><br>
<span class="quotelev2">&gt;&gt; again.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [biou2.rice.edu:30021] [[40214,0],0] ORTE_ERROR_LOG: Out of resource in file /home/phh1/SCRATCH/OMPI/openmpi-1.7-latest-linux-ppc32-xlc-11.1/openmpi-1.7.4rc2r30361/orte/util/session_dir.c at line 380
</span><br>
<span class="quotelev2">&gt;&gt; [biou2.rice.edu:30021] [[40214,0],0] ORTE_ERROR_LOG: Out of resource in file /home/phh1/SCRATCH/OMPI/openmpi-1.7-latest-linux-ppc32-xlc-11.1/openmpi-1.7.4rc2r30361/orte/mca/ess/hnp/ess_hnp_module.c at line 599
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt;&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev2">&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   orte_session_dir failed
</span><br>
<span class="quotelev2">&gt;&gt;   --&gt; Returned value Out of resource (-2) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; An &quot;-np 2&quot; run fails in the same manner.
</span><br>
<span class="quotelev2">&gt;&gt; This is a production system and there is no problem with &quot;whoami&quot; or &quot;id&quot;, leaving me doubting the explanation provided by the error message.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [phh1_at_biou2 ~]$ whoami
</span><br>
<span class="quotelev2">&gt;&gt; phh1
</span><br>
<span class="quotelev2">&gt;&gt; [phh1_at_biou2 ~]$ id
</span><br>
<span class="quotelev2">&gt;&gt; uid=44154(phh1) gid=2016(hpc) groups=2016(hpc),3803(hpcusers),3805(sshgw),3808(biou)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The &quot;ompi_info --all&quot; output is attached.
</span><br>
<span class="quotelev2">&gt;&gt; Please let me know what additional info is needed.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt; &lt;biou2_info.txt.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13866/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13867.php">Paul Hargrove: "[OMPI devel] trunk and v1.7: xlc and lost atomics patch"</a>
<li><strong>Previous message:</strong> <a href="13865.php">Irvanda Kurniadi: "[OMPI devel] Unknown object files in libmpi.a"</a>
<li><strong>In reply to:</strong> <a href="13863.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: yet another launch failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13877.php">Nathan Hjelm: "Re: [OMPI devel] 1.7.4rc: yet another launch failure"</a>
<li><strong>Reply:</strong> <a href="13877.php">Nathan Hjelm: "Re: [OMPI devel] 1.7.4rc: yet another launch failure"</a>
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
