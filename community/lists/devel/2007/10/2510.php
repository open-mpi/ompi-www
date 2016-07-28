<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 26 14:33:48 2007" -->
<!-- isoreceived="20071026183348" -->
<!-- sent="Fri, 26 Oct 2007 14:33:43 -0400" -->
<!-- isosent="20071026183343" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: [OMPI svn] svn:open-mpi r16563" -->
<!-- id="20071026183342.GA65452_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="79433040-1DF0-436A-853F-DBE5A0EDA990_at_eecs.utk.edu" -->
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
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-26 14:33:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2511.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI svn] svn:open-mpi r16563"</a>
<li><strong>Previous message:</strong> <a href="2509.php">Jinhui Qin: "Re: [OMPI devel] problem in runing MPI job through XGrid"</a>
<li><strong>In reply to:</strong> <a href="2508.php">George Bosilca: "[OMPI devel] Fwd: [OMPI svn] svn:open-mpi r16563"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2511.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI svn] svn:open-mpi r16563"</a>
<li><strong>Reply:</strong> <a href="2511.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI svn] svn:open-mpi r16563"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Whoa! My apologies. I saw the same behavior when I did:
<br>
<p>&nbsp;&nbsp;$ rm -rf ~/.svk 
<br>
<p>I think if we check the existence of $HOME/.svk before doing
<br>
any svk commands then we should be okay. I did that in
<br>
r16586. Does it work for you now?
<br>
<p>-Ethan
<br>
<p><p>On Fri, Oct/26/2007 02:02:42PM, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; This patch break the autogen.sh in the case svk is
</span><br>
<span class="quotelev1">&gt; available on the node. I try it on MAC OS X as well as
</span><br>
<span class="quotelev1">&gt; Linux boxes, and svk info will try to create the svk if
</span><br>
<span class="quotelev1">&gt; the project is not svk based. In fact it ask the user if
</span><br>
<span class="quotelev1">&gt; he want to create the svk stuff, but the output is hidden
</span><br>
<span class="quotelev1">&gt; by the autogen.sh so it just stay there forever.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Thanks,
</span><br>
<span class="quotelev1">&gt;     george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Begin forwarded message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From: emallove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Date: October 25, 2007 10:12:53 AM EDT
</span><br>
<span class="quotelev2">&gt;&gt; To: svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI svn] svn:open-mpi r16563
</span><br>
<span class="quotelev2">&gt;&gt; Reply-To: devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Author: emallove
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2007-10-25 10:12:52 EDT (Thu, 25 Oct 2007)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 16563
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/16563">https://svn.open-mpi.org/trac/ompi/changeset/16563</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Sanity check for SVK workspace in autogen.sh.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified:
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/autogen.sh |    29 ++++++++++++++++++++++++++++-
</span><br>
<span class="quotelev2">&gt;&gt;    1 files changed, 28 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/autogen.sh
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/autogen.sh	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/autogen.sh	2007-10-25 10:12:52 EDT (Thu, 25 Oct 2007)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1103,6 +1103,32 @@
</span><br>
<span class="quotelev2">&gt;&gt;      unset project project_path framework framework_path component 
</span><br>
<span class="quotelev2">&gt;&gt; component_path
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +##############################################################################
</span><br>
<span class="quotelev2">&gt;&gt; +#
</span><br>
<span class="quotelev2">&gt;&gt; +# check_for_svk_checkout - determine whether this is an SVK checkout
</span><br>
<span class="quotelev2">&gt;&gt; +#
</span><br>
<span class="quotelev2">&gt;&gt; +# INPUT:
</span><br>
<span class="quotelev2">&gt;&gt; +#    none
</span><br>
<span class="quotelev2">&gt;&gt; +#
</span><br>
<span class="quotelev2">&gt;&gt; +# OUTPUT:
</span><br>
<span class="quotelev2">&gt;&gt; +#    none
</span><br>
<span class="quotelev2">&gt;&gt; +#
</span><br>
<span class="quotelev2">&gt;&gt; +# SIDE EFFECTS:
</span><br>
<span class="quotelev2">&gt;&gt; +#
</span><br>
<span class="quotelev2">&gt;&gt; +##############################################################################
</span><br>
<span class="quotelev2">&gt;&gt; +check_for_svk_checkout() {
</span><br>
<span class="quotelev2">&gt;&gt; +    is_svk_checkout=0
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    svk_path=`which svk 2&gt;/dev/null`
</span><br>
<span class="quotelev2">&gt;&gt; +    if test -x &quot;$svk_path&quot;; then
</span><br>
<span class="quotelev2">&gt;&gt; +        top_level_dir=&quot;`dirname $0`&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +        svk info $top_level_dir &gt;/dev/null 2&gt;&amp;1
</span><br>
<span class="quotelev2">&gt;&gt; +        if test &quot;$?&quot; = 0 ; then
</span><br>
<span class="quotelev2">&gt;&gt; +            is_svk_checkout=1
</span><br>
<span class="quotelev2">&gt;&gt; +        fi
</span><br>
<span class="quotelev2">&gt;&gt; +    fi
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +}
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; ##############################################################################
</span><br>
<span class="quotelev2">&gt;&gt;  #
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1135,7 +1161,8 @@
</span><br>
<span class="quotelev2">&gt;&gt;  echo &quot;[Checking] prerequisites&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  # sanity check to make sure user isn't being stupid
</span><br>
<span class="quotelev2">&gt;&gt; -if test ! -d .svn ; then
</span><br>
<span class="quotelev2">&gt;&gt; +check_for_svk_checkout
</span><br>
<span class="quotelev2">&gt;&gt; +if test ! -d .svn -a ! $is_svk_checkout ; then
</span><br>
<span class="quotelev2">&gt;&gt;      cat &lt;&lt;EOF
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  This doesn't look like a developer copy of Open MPI.  You probably do not
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; svn mailing list
</span><br>
<span class="quotelev2">&gt;&gt; svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2511.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI svn] svn:open-mpi r16563"</a>
<li><strong>Previous message:</strong> <a href="2509.php">Jinhui Qin: "Re: [OMPI devel] problem in runing MPI job through XGrid"</a>
<li><strong>In reply to:</strong> <a href="2508.php">George Bosilca: "[OMPI devel] Fwd: [OMPI svn] svn:open-mpi r16563"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2511.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI svn] svn:open-mpi r16563"</a>
<li><strong>Reply:</strong> <a href="2511.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI svn] svn:open-mpi r16563"</a>
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
