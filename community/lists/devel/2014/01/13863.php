<?
$subject_val = "Re: [OMPI devel] 1.7.4rc: yet another launch failure";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 22 22:54:25 2014" -->
<!-- isoreceived="20140123035425" -->
<!-- sent="Wed, 22 Jan 2014 19:54:21 -0800" -->
<!-- isosent="20140123035421" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc: yet another launch failure" -->
<!-- id="CAAvDA17ZvgXhc6rGqCOiiQWsqTZ40uuEONODthN8+xeXV7QnXg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8B19B990-70A8-46E5-9E70-E9607D97550A_at_open-mpi.org" -->
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
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-22 22:54:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13864.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<li><strong>Previous message:</strong> <a href="13862.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<li><strong>In reply to:</strong> <a href="13861.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc: yet another launch failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13866.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc: yet another launch failure"</a>
<li><strong>Reply:</strong> <a href="13866.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc: yet another launch failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Not lacking getpwuid():
<br>
<p>[phh1_at_biou2 BLD]$ grep HAVE_GETPWUID */include/*_config.h
<br>
opal/include/opal_config.h:#define HAVE_GETPWUID 1
<br>
<p>I also can't see why the quoted code could fail.
<br>
The following is working fine:
<br>
<p>[phh1_at_biou2 BLD]$ cat q.c
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;unistd.h&gt;
<br>
#include &lt;sys/types.h&gt;
<br>
#include &lt;pwd.h&gt;
<br>
int main(void) {
<br>
&nbsp;&nbsp;&nbsp;uid_t uid = getuid();
<br>
&nbsp;&nbsp;&nbsp;printf(&quot;uid = %d\n&quot;, (int)uid);
<br>
&nbsp;&nbsp;&nbsp;struct passwd *p = getpwuid(uid);
<br>
&nbsp;&nbsp;&nbsp;if (p) printf(&quot;name = %s\n&quot;, p-&gt;pw_name);
<br>
&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>[phh1_at_biou2 BLD]$ gcc -std=c99 q.c &amp;&amp; ./a.out
<br>
uid = 44154
<br>
name = phh1
<br>
<p>HOWEVER, building for ILP32 target (as in the reported failure) fails:
<br>
<p>[phh1_at_biou2 BLD]$ gcc -m32 -std=c99 q.c &amp;&amp; ./a.out
<br>
uid = 44154
<br>
<p>So, I am going to guess that this *is* a system misconfiguration (maybe
<br>
missing the 32-bit foo.so for the appropriate nsswitch resolver?) just as
<br>
the error message said.
<br>
<p>Sorry for the false alarm,
<br>
-Paul
<br>
<p><p>On Wed, Jan 22, 2014 at 7:36 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Here is the offending code:
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
<span class="quotelev1">&gt; Is it possible on this platform that you don't have getpwuid? I'm
</span><br>
<span class="quotelev1">&gt; surprised at the code as we could just use the uid instead - not sure why
</span><br>
<span class="quotelev1">&gt; this more stringent test was applied
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
<span class="quotelev1">&gt; On yet another test platform I see the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpirun -mca btl sm,self -np 1 examples/ring_c
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Open MPI was unable to obtain the username in order to create a path
</span><br>
<span class="quotelev1">&gt; for its required temporary directories.  This type of error is usually
</span><br>
<span class="quotelev1">&gt; caused by a transient failure of network-based authentication services
</span><br>
<span class="quotelev1">&gt; (e.g., LDAP or NIS failure due to network congestion), but can also be
</span><br>
<span class="quotelev1">&gt; an indication of system misconfiguration.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please consult your system administrator about these issues and try
</span><br>
<span class="quotelev1">&gt; again.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [biou2.rice.edu:30021] [[40214,0],0] ORTE_ERROR_LOG: Out of resource in
</span><br>
<span class="quotelev1">&gt; file
</span><br>
<span class="quotelev1">&gt; /home/phh1/SCRATCH/OMPI/openmpi-1.7-latest-linux-ppc32-xlc-11.1/openmpi-1.7.4rc2r30361/orte/util/session_dir.c
</span><br>
<span class="quotelev1">&gt; at line 380
</span><br>
<span class="quotelev1">&gt; [biou2.rice.edu:30021] [[40214,0],0] ORTE_ERROR_LOG: Out of resource in
</span><br>
<span class="quotelev1">&gt; file
</span><br>
<span class="quotelev1">&gt; /home/phh1/SCRATCH/OMPI/openmpi-1.7-latest-linux-ppc32-xlc-11.1/openmpi-1.7.4rc2r30361/orte/mca/ess/hnp/ess_hnp_module.c
</span><br>
<span class="quotelev1">&gt; at line 599
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   orte_session_dir failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned value Out of resource (-2) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; An &quot;-np 2&quot; run fails in the same manner.
</span><br>
<span class="quotelev1">&gt; This is a production system and there is no problem with &quot;whoami&quot; or &quot;id&quot;,
</span><br>
<span class="quotelev1">&gt; leaving me doubting the explanation provided by the error message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [phh1_at_biou2 ~]$ whoami
</span><br>
<span class="quotelev1">&gt; phh1
</span><br>
<span class="quotelev1">&gt; [phh1_at_biou2 ~]$ id
</span><br>
<span class="quotelev1">&gt; uid=44154(phh1) gid=2016(hpc)
</span><br>
<span class="quotelev1">&gt; groups=2016(hpc),3803(hpcusers),3805(sshgw),3808(biou)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The &quot;ompi_info --all&quot; output is attached.
</span><br>
<span class="quotelev1">&gt; Please let me know what additional info is needed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
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
<span class="quotelev1">&gt;  &lt;biou2_info.txt.bz2&gt;_______________________________________________
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
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13863/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13864.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<li><strong>Previous message:</strong> <a href="13862.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<li><strong>In reply to:</strong> <a href="13861.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc: yet another launch failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13866.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc: yet another launch failure"</a>
<li><strong>Reply:</strong> <a href="13866.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc: yet another launch failure"</a>
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
