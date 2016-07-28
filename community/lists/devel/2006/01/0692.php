<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jan 19 04:12:23 2006" -->
<!-- isoreceived="20060119091223" -->
<!-- sent="Thu, 19 Jan 2006 10:12:15 +0100" -->
<!-- isosent="20060119091215" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re:  Path detection patch" -->
<!-- id="20060119091215.GA5237_at_iam.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9B4C54E9-BF0B-453C-9D06-8E9667685FC2_at_cs.utk.edu" -->
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
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-19 04:12:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0693.php">George Bosilca: "Re:  posix threads"</a>
<li><strong>Previous message:</strong> <a href="0691.php">Brian Barrett: "Re:  ompi_get_version"</a>
<li><strong>In reply to:</strong> <a href="0690.php">George Bosilca: "Path detection patch"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi George,
<br>
<p>* George Bosilca wrote on Wed, Jan 18, 2006 at 10:39:48PM CET:
<br>
<span class="quotelev1">&gt; I have some troubles on windows getting the correct path for the ompi  
</span><br>
<span class="quotelev1">&gt; installation directory as well as all tools used inside. We need this  
</span><br>
<span class="quotelev1">&gt; path in order to be able to use the wrappers compilers, to load the  
</span><br>
<span class="quotelev1">&gt; shared libraries and so on. I dig on the web and I come up with a  
</span><br>
<span class="quotelev1">&gt; solution. If involve replacing the path define (it's always a define  
</span><br>
<span class="quotelev1">&gt; for us) with a shell command. Depending on the OS this shell command  
</span><br>
<span class="quotelev1">&gt; will do the magic to setup correctly the path. Here is an example:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Actual code:
</span><br>
<span class="quotelev1">&gt;     -DOMPI_PKGLIBDIR=\&quot;$(pkglibdir)\&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Patched code:
</span><br>
<span class="quotelev1">&gt;     -DOMPI_PKGLIBDIR=\&quot;&quot;`@PATH_CONVERTOR@ '$(pkglibdir)'`\&quot;&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On all UNIX flavors the PATH_CONVERTOR will be set to echo. On cygwin  
</span><br>
<span class="quotelev1">&gt; will be set to &quot;cygpath -m&quot; so we will get the correct windows path.  
</span><br>
<span class="quotelev1">&gt; I'm still looking on how to set it correctly on mingw.
</span><br>
<p>You might want to try
<br>
&nbsp;&nbsp;cmd.exe //c $program_to_execute &quot;$@&quot;
<br>
<p>which will cause the mingw runtime to do path translation on all
<br>
arguments.  Watch out, though, this will generate backslashes,
<br>
similar to 'cygpath -w' but unlike 'cygpath -m'.
<br>
<p>Likely, some other OpenMPI macros will need to be adjusted for this.
<br>
Within Libtool, we mostly use this idiom to detect absolute path names:
<br>
&nbsp;&nbsp;case $dir in
<br>
&nbsp;&nbsp;[\\/]* | [A-Za-z]:[\\/]*)  $commands_for_absolute_paths ;;
<br>
&nbsp;&nbsp;*)  $other_commands ;;
<br>
&nbsp;&nbsp;esac
<br>
<p>(The nontrivial bit here is that using [/\\] instead of [\\/] is not
<br>
portable due to buggy shells.)
<br>
<p>These threads may also be important to you (esp. for paths that do not
<br>
exist yet):
<br>
<a href="http://article.gmane.org/gmane.comp.gnu.mingw.msys/2785">http://article.gmane.org/gmane.comp.gnu.mingw.msys/2785</a>
<br>
<a href="http://thread.gmane.org/gmane.comp.gnu.mingw.user/18035">http://thread.gmane.org/gmane.comp.gnu.mingw.user/18035</a>
<br>
<p>Also note that Automake has $(CYGPATH_W), which may be useful for you.
<br>
<p><span class="quotelev1">&gt; I attached the patch to this email. If you know or can find a  
</span><br>
<span class="quotelev1">&gt; simplest way I will be happy to hear about. As usual all comments are  
</span><br>
<span class="quotelev1">&gt; welcome :)
</span><br>
<p>| +            -DOMPI_PREFIX=\&quot;&quot;`@PATH_CONVERTOR@ '$(prefix)'`\&quot;&quot; \
<br>
<p>Since you already AC_SUBST([PATH_CONVERTOR]), you can write
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-DOMPI_PREFIX=\&quot;&quot;`$(PATH_CONVERTOR) '$(prefix)'`\&quot;&quot; \
<br>
<p>here.  Instead of changing all paths in the Makefiles only, you could
<br>
try to do the translation at configure time already.  A related thing
<br>
you will encounter is that users will pass translated paths already
<br>
(rather, some automatism will cause translated paths to be passed),
<br>
so macros should probably be aware of that anyway.
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0693.php">George Bosilca: "Re:  posix threads"</a>
<li><strong>Previous message:</strong> <a href="0691.php">Brian Barrett: "Re:  ompi_get_version"</a>
<li><strong>In reply to:</strong> <a href="0690.php">George Bosilca: "Path detection patch"</a>
<!-- nextthread="start" -->
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
