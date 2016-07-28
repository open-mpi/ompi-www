<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 26 15:33:19 2007" -->
<!-- isoreceived="20071026193319" -->
<!-- sent="Fri, 26 Oct 2007 15:33:04 -0400" -->
<!-- isosent="20071026193304" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: [OMPI svn] svn:open-mpi r16563" -->
<!-- id="0D58D6C6-8698-470B-8AE0-5DEDF5480D5C_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="2EB8E37B-8F1E-45B3-872D-B981ACB05BBA_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2007-10-26 15:33:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2515.php">Ethan Mallove: "Re: [OMPI devel] Fwd: [OMPI svn] svn:open-mpi r16563"</a>
<li><strong>Previous message:</strong> <a href="2513.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI svn] svn:open-mpi r16563"</a>
<li><strong>In reply to:</strong> <a href="2513.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI svn] svn:open-mpi r16563"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2515.php">Ethan Mallove: "Re: [OMPI devel] Fwd: [OMPI svn] svn:open-mpi r16563"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ethan,
<br>
<p>I think I understand what the problem is. We should check for 2  
<br>
files: ~/.svk and ~/.svk/local. If they both exist then we can use  
<br>
the &quot;svn info&quot; command. If ~/.svk/local is missing then svk will ask  
<br>
the user if it's ok to create it.
<br>
<p>With both ~/.svk and ~/.svk existing I finally got the expected  
<br>
answer from svk:
<br>
svk info unstable/ompi-trunk/
<br>
path /Users/bosilca/unstable/ompi-trunk is not a checkout path.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Oct 26, 2007, at 3:13 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Ethan,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looks like you have a really old version of svk. Here is the  
</span><br>
<span class="quotelev1">&gt; information about mine:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; svk --version
</span><br>
<span class="quotelev1">&gt; This is svk, version v2.0.2 (using Subversion bindings 1.4.5)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And here is what's happens when I &quot;svk info&quot; on a non svk path.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; svk info unstable/ompi-trunk
</span><br>
<span class="quotelev1">&gt; Repository /Users/bosilca/.svk/local does not exist, create? (y/n) 
</span><br>
<span class="quotelev1">&gt; Interrupted.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I had to kill it with CTRL+C ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Thanks,
</span><br>
<span class="quotelev1">&gt;     george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 26, 2007, at 3:04 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; George,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For me, SVK says the below on a non-SVK path (then it
</span><br>
<span class="quotelev2">&gt;&gt; immediately exits):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   $ svk info /tmp
</span><br>
<span class="quotelev2">&gt;&gt;   path /tmp is not a checkout path.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   $ svk --version
</span><br>
<span class="quotelev2">&gt;&gt;   This is svk, version 1.07.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What is the prompt that SVK gives you?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Ethan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Oct/26/2007 02:36:50PM, George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ethan,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It only solve half the problem. I do have some svk based
</span><br>
<span class="quotelev3">&gt;&gt;&gt; directories on my system ... but not all my Open MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checkouts are svk based. So, it still deadlock for me.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   george.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Oct 26, 2007, at 2:33 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Whoa! My apologies. I saw the same behavior when I did:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   $ rm -rf ~/.svk
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I think if we check the existence of $HOME/.svk before doing
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; any svk commands then we should be okay. I did that in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; r16586. Does it work for you now?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Ethan
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Fri, Oct/26/2007 02:02:42PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This patch break the autogen.sh in the case svk is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; available on the node. I try it on MAC OS X as well as
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Linux boxes, and svk info will try to create the svk if
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the project is not svk based. In fact it ask the user if
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; he want to create the svk stuff, but the output is hidden
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; by the autogen.sh so it just stay there forever.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   Thanks,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     george.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Begin forwarded message:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; From: emallove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Date: October 25, 2007 10:12:53 AM EDT
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; To: svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subject: [OMPI svn] svn:open-mpi r16563
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Reply-To: devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Author: emallove
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Date: 2007-10-25 10:12:52 EDT (Thu, 25 Oct 2007)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; New Revision: 16563
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/16563">https://svn.open-mpi.org/trac/ompi/changeset/16563</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Sanity check for SVK workspace in autogen.sh.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Text files modified:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;    trunk/autogen.sh |    29 ++++++++++++++++++++++++++++-
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;    1 files changed, 28 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Modified: trunk/autogen.sh
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ================================================================= 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; =============
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --- trunk/autogen.sh	(original)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; +++ trunk/autogen.sh	2007-10-25 10:12:52 EDT (Thu, 25 Oct 2007)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; @@ -1103,6 +1103,32 @@
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      unset project project_path framework framework_path  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; component
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; component_path
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; +################################################################ 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ##############
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; +#
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; +# check_for_svk_checkout - determine whether this is an SVK  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; checkout
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; +#
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; +# INPUT:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; +#    none
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; +#
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; +# OUTPUT:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; +#    none
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; +#
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; +# SIDE EFFECTS:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; +#
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; +################################################################ 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ##############
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; +check_for_svk_checkout() {
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; +    is_svk_checkout=0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; +    svk_path=`which svk 2&gt;/dev/null`
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; +    if test -x &quot;$svk_path&quot;; then
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; +        top_level_dir=&quot;`dirname $0`&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; +        svk info $top_level_dir &gt;/dev/null 2&gt;&amp;1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; +        if test &quot;$?&quot; = 0 ; then
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; +            is_svk_checkout=1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; +        fi
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; +    fi
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; +}
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ################################################################# 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #############
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  #
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; @@ -1135,7 +1161,8 @@
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  echo &quot;[Checking] prerequisites&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  # sanity check to make sure user isn't being stupid
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -if test ! -d .svn ; then
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; +check_for_svk_checkout
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; +if test ! -d .svn -a ! $is_svk_checkout ; then
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      cat &lt;&lt;EOF
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  This doesn't look like a developer copy of Open MPI.  You  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; probably do
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; not
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; svn mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2514/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2515.php">Ethan Mallove: "Re: [OMPI devel] Fwd: [OMPI svn] svn:open-mpi r16563"</a>
<li><strong>Previous message:</strong> <a href="2513.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI svn] svn:open-mpi r16563"</a>
<li><strong>In reply to:</strong> <a href="2513.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI svn] svn:open-mpi r16563"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2515.php">Ethan Mallove: "Re: [OMPI devel] Fwd: [OMPI svn] svn:open-mpi r16563"</a>
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
