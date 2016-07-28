<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 26 14:37:05 2007" -->
<!-- isoreceived="20071026183705" -->
<!-- sent="Fri, 26 Oct 2007 14:36:50 -0400" -->
<!-- isosent="20071026183650" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: [OMPI svn] svn:open-mpi r16563" -->
<!-- id="6AF0F9E1-D11E-4D4F-AFD5-858A9361E9C8_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20071026183342.GA65452_at_sun.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-26 14:36:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2512.php">Ethan Mallove: "Re: [OMPI devel] Fwd: [OMPI svn] svn:open-mpi r16563"</a>
<li><strong>Previous message:</strong> <a href="2510.php">Ethan Mallove: "Re: [OMPI devel] Fwd: [OMPI svn] svn:open-mpi r16563"</a>
<li><strong>In reply to:</strong> <a href="2510.php">Ethan Mallove: "Re: [OMPI devel] Fwd: [OMPI svn] svn:open-mpi r16563"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2512.php">Ethan Mallove: "Re: [OMPI devel] Fwd: [OMPI svn] svn:open-mpi r16563"</a>
<li><strong>Reply:</strong> <a href="2512.php">Ethan Mallove: "Re: [OMPI devel] Fwd: [OMPI svn] svn:open-mpi r16563"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ethan,
<br>
<p>It only solve half the problem. I do have some svk based directories  
<br>
on my system ... but not all my Open MPI checkouts are svk based. So,  
<br>
it still deadlock for me.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Oct 26, 2007, at 2:33 PM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; Whoa! My apologies. I saw the same behavior when I did:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   $ rm -rf ~/.svk
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think if we check the existence of $HOME/.svk before doing
</span><br>
<span class="quotelev1">&gt; any svk commands then we should be okay. I did that in
</span><br>
<span class="quotelev1">&gt; r16586. Does it work for you now?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Oct/26/2007 02:02:42PM, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; This patch break the autogen.sh in the case svk is
</span><br>
<span class="quotelev2">&gt;&gt; available on the node. I try it on MAC OS X as well as
</span><br>
<span class="quotelev2">&gt;&gt; Linux boxes, and svk info will try to create the svk if
</span><br>
<span class="quotelev2">&gt;&gt; the project is not svk based. In fact it ask the user if
</span><br>
<span class="quotelev2">&gt;&gt; he want to create the svk stuff, but the output is hidden
</span><br>
<span class="quotelev2">&gt;&gt; by the autogen.sh so it just stay there forever.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;     george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Begin forwarded message:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: emallove_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: October 25, 2007 10:12:53 AM EDT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: svn_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: [OMPI svn] svn:open-mpi r16563
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Reply-To: devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Author: emallove
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: 2007-10-25 10:12:52 EDT (Thu, 25 Oct 2007)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; New Revision: 16563
</span><br>
<span class="quotelev3">&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/16563">https://svn.open-mpi.org/trac/ompi/changeset/16563</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sanity check for SVK workspace in autogen.sh.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Text files modified:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/autogen.sh |    29 ++++++++++++++++++++++++++++-
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    1 files changed, 28 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/autogen.sh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==================================================================== 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==========
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/autogen.sh	(original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/autogen.sh	2007-10-25 10:12:52 EDT (Thu, 25 Oct 2007)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -1103,6 +1103,32 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      unset project project_path framework framework_path component
</span><br>
<span class="quotelev3">&gt;&gt;&gt; component_path
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +################################################################### 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ###########
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +# check_for_svk_checkout - determine whether this is an SVK  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checkout
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +# INPUT:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#    none
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +# OUTPUT:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#    none
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +# SIDE EFFECTS:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +################################################################### 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ###########
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +check_for_svk_checkout() {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    is_svk_checkout=0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    svk_path=`which svk 2&gt;/dev/null`
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    if test -x &quot;$svk_path&quot;; then
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        top_level_dir=&quot;`dirname $0`&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        svk info $top_level_dir &gt;/dev/null 2&gt;&amp;1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        if test &quot;$?&quot; = 0 ; then
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            is_svk_checkout=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        fi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    fi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #################################################################### 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ##########
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -1135,7 +1161,8 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  echo &quot;[Checking] prerequisites&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  # sanity check to make sure user isn't being stupid
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -if test ! -d .svn ; then
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +check_for_svk_checkout
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +if test ! -d .svn -a ! $is_svk_checkout ; then
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      cat &lt;&lt;EOF
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  This doesn't look like a developer copy of Open MPI.  You  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; probably do not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2511/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2512.php">Ethan Mallove: "Re: [OMPI devel] Fwd: [OMPI svn] svn:open-mpi r16563"</a>
<li><strong>Previous message:</strong> <a href="2510.php">Ethan Mallove: "Re: [OMPI devel] Fwd: [OMPI svn] svn:open-mpi r16563"</a>
<li><strong>In reply to:</strong> <a href="2510.php">Ethan Mallove: "Re: [OMPI devel] Fwd: [OMPI svn] svn:open-mpi r16563"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2512.php">Ethan Mallove: "Re: [OMPI devel] Fwd: [OMPI svn] svn:open-mpi r16563"</a>
<li><strong>Reply:</strong> <a href="2512.php">Ethan Mallove: "Re: [OMPI devel] Fwd: [OMPI svn] svn:open-mpi r16563"</a>
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
