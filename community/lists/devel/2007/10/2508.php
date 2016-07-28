<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 26 14:02:57 2007" -->
<!-- isoreceived="20071026180257" -->
<!-- sent="Fri, 26 Oct 2007 14:02:42 -0400" -->
<!-- isosent="20071026180242" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="[OMPI devel] Fwd: [OMPI svn] svn:open-mpi r16563" -->
<!-- id="79433040-1DF0-436A-853F-DBE5A0EDA990_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200710251412.l9PECrF5020006_at_sourcehaven.osl.iu.edu" -->
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
<strong>Date:</strong> 2007-10-26 14:02:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2509.php">Jinhui Qin: "Re: [OMPI devel] problem in runing MPI job through XGrid"</a>
<li><strong>Previous message:</strong> <a href="2507.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16584"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2510.php">Ethan Mallove: "Re: [OMPI devel] Fwd: [OMPI svn] svn:open-mpi r16563"</a>
<li><strong>Reply:</strong> <a href="2510.php">Ethan Mallove: "Re: [OMPI devel] Fwd: [OMPI svn] svn:open-mpi r16563"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This patch break the autogen.sh in the case svk is available on the  
<br>
node. I try it on MAC OS X as well as Linux boxes, and svk info will  
<br>
try to create the svk if the project is not svk based. In fact it ask  
<br>
the user if he want to create the svk stuff, but the output is hidden  
<br>
by the autogen.sh so it just stay there forever.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>Begin forwarded message:
<br>
<p><span class="quotelev1">&gt; From: emallove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Date: October 25, 2007 10:12:53 AM EDT
</span><br>
<span class="quotelev1">&gt; To: svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI svn] svn:open-mpi r16563
</span><br>
<span class="quotelev1">&gt; Reply-To: devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Author: emallove
</span><br>
<span class="quotelev1">&gt; Date: 2007-10-25 10:12:52 EDT (Thu, 25 Oct 2007)
</span><br>
<span class="quotelev1">&gt; New Revision: 16563
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/16563">https://svn.open-mpi.org/trac/ompi/changeset/16563</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Sanity check for SVK workspace in autogen.sh.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;    trunk/autogen.sh |    29 ++++++++++++++++++++++++++++-
</span><br>
<span class="quotelev1">&gt;    1 files changed, 28 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/autogen.sh
</span><br>
<span class="quotelev1">&gt; ====================================================================== 
</span><br>
<span class="quotelev1">&gt; ========
</span><br>
<span class="quotelev1">&gt; --- trunk/autogen.sh	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/autogen.sh	2007-10-25 10:12:52 EDT (Thu, 25 Oct 2007)
</span><br>
<span class="quotelev1">&gt; @@ -1103,6 +1103,32 @@
</span><br>
<span class="quotelev1">&gt;      unset project project_path framework framework_path component  
</span><br>
<span class="quotelev1">&gt; component_path
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +##################################################################### 
</span><br>
<span class="quotelev1">&gt; #########
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +# check_for_svk_checkout - determine whether this is an SVK checkout
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +# INPUT:
</span><br>
<span class="quotelev1">&gt; +#    none
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +# OUTPUT:
</span><br>
<span class="quotelev1">&gt; +#    none
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +# SIDE EFFECTS:
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +##################################################################### 
</span><br>
<span class="quotelev1">&gt; #########
</span><br>
<span class="quotelev1">&gt; +check_for_svk_checkout() {
</span><br>
<span class="quotelev1">&gt; +    is_svk_checkout=0
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    svk_path=`which svk 2&gt;/dev/null`
</span><br>
<span class="quotelev1">&gt; +    if test -x &quot;$svk_path&quot;; then
</span><br>
<span class="quotelev1">&gt; +        top_level_dir=&quot;`dirname $0`&quot;
</span><br>
<span class="quotelev1">&gt; +        svk info $top_level_dir &gt;/dev/null 2&gt;&amp;1
</span><br>
<span class="quotelev1">&gt; +        if test &quot;$?&quot; = 0 ; then
</span><br>
<span class="quotelev1">&gt; +            is_svk_checkout=1
</span><br>
<span class="quotelev1">&gt; +        fi
</span><br>
<span class="quotelev1">&gt; +    fi
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; ###################################################################### 
</span><br>
<span class="quotelev1">&gt; ########
</span><br>
<span class="quotelev1">&gt;  #
</span><br>
<span class="quotelev1">&gt; @@ -1135,7 +1161,8 @@
</span><br>
<span class="quotelev1">&gt;  echo &quot;[Checking] prerequisites&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  # sanity check to make sure user isn't being stupid
</span><br>
<span class="quotelev1">&gt; -if test ! -d .svn ; then
</span><br>
<span class="quotelev1">&gt; +check_for_svk_checkout
</span><br>
<span class="quotelev1">&gt; +if test ! -d .svn -a ! $is_svk_checkout ; then
</span><br>
<span class="quotelev1">&gt;      cat &lt;&lt;EOF
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  This doesn't look like a developer copy of Open MPI.  You probably  
</span><br>
<span class="quotelev1">&gt; do not
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn mailing list
</span><br>
<span class="quotelev1">&gt; svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2508/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2509.php">Jinhui Qin: "Re: [OMPI devel] problem in runing MPI job through XGrid"</a>
<li><strong>Previous message:</strong> <a href="2507.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16584"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2510.php">Ethan Mallove: "Re: [OMPI devel] Fwd: [OMPI svn] svn:open-mpi r16563"</a>
<li><strong>Reply:</strong> <a href="2510.php">Ethan Mallove: "Re: [OMPI devel] Fwd: [OMPI svn] svn:open-mpi r16563"</a>
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
