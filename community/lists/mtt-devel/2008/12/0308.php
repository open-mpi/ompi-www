<?
$subject_val = "Re: [MTT devel] [MTT svn] svn:mtt-svn r1262";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  5 12:52:21 2008" -->
<!-- isoreceived="20081205175221" -->
<!-- sent="Fri, 5 Dec 2008 12:52:08 -0500" -->
<!-- isosent="20081205175208" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT svn] svn:mtt-svn r1262" -->
<!-- id="ea86ce220812050952p2d382ac2qcfeb8a352a3ed3dd_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200812051625.mB5GP3YN028433_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [MTT devel] [MTT svn] svn:mtt-svn r1262<br>
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-05 12:52:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0309.php">Jeff Squyres: "[MTT devel] MTT static site problem"</a>
<li><strong>Previous message:</strong> <a href="0307.php">Ethan Mallove: "Re: [MTT devel] Time to make the 2009 mtt database partitions?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This worked great for me.  Thanks Ethan!
<br>
<p>On Fri, Dec 5, 2008 at 11:25 AM,  &lt;emallove_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Author: emallove
</span><br>
<span class="quotelev1">&gt; Date: 2008-12-05 11:25:03 EST (Fri, 05 Dec 2008)
</span><br>
<span class="quotelev1">&gt; New Revision: 1262
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/mtt/changeset/1262">https://svn.open-mpi.org/trac/mtt/changeset/1262</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt;  * Tim M discovered a bug in which MTT picks up the wrong version
</span><br>
<span class="quotelev1">&gt;   string when a user has a scratch dir containing a &lt;name&gt;-&lt;number&gt;
</span><br>
<span class="quotelev1">&gt;   pattern in it (e.g., {{{--scratch /foo/bar-23}}}). So when getting
</span><br>
<span class="quotelev1">&gt;   an MPI version string based on the URL basename (&lt;name&gt;-&lt;number&gt;),
</span><br>
<span class="quotelev1">&gt;   we must remove the {{{cwd}}} portion of the dirname so that we do
</span><br>
<span class="quotelev1">&gt;   not erroneously get a version string from the user's scratch
</span><br>
<span class="quotelev1">&gt;   dirname or INI section name.
</span><br>
<span class="quotelev1">&gt;  * Properly assign the {{{r}}} value getting passed back to the main
</span><br>
<span class="quotelev1">&gt;   {{{MPI/Get.pm}}}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;   trunk/lib/MTT/Common/SCM.pm |    19 ++++++++++++++++---
</span><br>
<span class="quotelev1">&gt;   1 files changed, 16 insertions(+), 3 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/lib/MTT/Common/SCM.pm
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/lib/MTT/Common/SCM.pm (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/lib/MTT/Common/SCM.pm 2008-12-05 11:25:03 EST (Fri, 05 Dec 2008)
</span><br>
<span class="quotelev1">&gt; @@ -82,6 +82,14 @@
</span><br>
<span class="quotelev1">&gt;     $params-&gt;{url} =~ s/\/\s*$//;
</span><br>
<span class="quotelev1">&gt;     my $basename = basename($params-&gt;{url});
</span><br>
<span class="quotelev1">&gt;     $params-&gt;{dirname} = &quot;$cwd/$basename&quot;;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    # Remove the cwd portion of the dirname so that we do not erroneously get a
</span><br>
<span class="quotelev1">&gt; +    # version string from the users scratch dirname or INI section name
</span><br>
<span class="quotelev1">&gt; +    my $scm_dirname = $params-&gt;{dirname};
</span><br>
<span class="quotelev1">&gt; +    $scm_dirname    =~ s/(\/+|\\+)/\//g;
</span><br>
<span class="quotelev1">&gt; +    $cwd            =~ s/(\/+|\\+)/\//g;
</span><br>
<span class="quotelev1">&gt; +    $scm_dirname    =~ s/$cwd//;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;     MTT::DoCommand::Cmd(1, &quot;rm -rf $basename&quot;)
</span><br>
<span class="quotelev1">&gt;         if ($params-&gt;{delete_first});
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -99,15 +107,18 @@
</span><br>
<span class="quotelev1">&gt;     my $ver;
</span><br>
<span class="quotelev1">&gt;     if (!defined($ret-&gt;{version})) {
</span><br>
<span class="quotelev1">&gt;         # 2. Try looking for name-&lt;number&gt; in the directory basename
</span><br>
<span class="quotelev1">&gt; -        if ($ver = &amp;get_version_from_filename($params-&gt;{dirname})) {
</span><br>
<span class="quotelev1">&gt; +        if ($ver = &amp;get_version_from_filename($scm_dirname)) {
</span><br>
<span class="quotelev1">&gt; +            Debug(&quot;Getting version string from name-&lt;number&gt; in the directory basename.\n&quot;);
</span><br>
<span class="quotelev1">&gt;             $ret-&gt;{version} = $ver;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;         # 3. Use the SVN r number
</span><br>
<span class="quotelev1">&gt;         elsif (defined($params-&gt;{rev})) {
</span><br>
<span class="quotelev1">&gt; -            $ret-&gt;{version} = &quot;r$r&quot;;
</span><br>
<span class="quotelev1">&gt; +            Debug(&quot;Getting version string from the SCM r number.\n&quot;);
</span><br>
<span class="quotelev1">&gt; +            $ret-&gt;{version} = &quot;r$params-&gt;{rev}&quot;;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;         # Give up
</span><br>
<span class="quotelev1">&gt;         else {
</span><br>
<span class="quotelev1">&gt; +            Debug(&quot;Couldn't find a decent version string. Using a date string.\n&quot;);
</span><br>
<span class="quotelev1">&gt;             $ret-&gt;{version} = &quot;$params-&gt;{simple_section}-&quot; .
</span><br>
<span class="quotelev1">&gt;                 strftime(&quot;%m%d%Y-%H%M%S&quot;, localtime);
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; @@ -121,7 +132,7 @@
</span><br>
<span class="quotelev1">&gt;     $data-&gt;{post_copy}          = $params-&gt;{post_copy};
</span><br>
<span class="quotelev1">&gt;     $data-&gt;{url}                = $params-&gt;{url};
</span><br>
<span class="quotelev1">&gt;     $data-&gt;{directory}          = $params-&gt;{dirname};
</span><br>
<span class="quotelev1">&gt; -    $data-&gt;{r}                  = $r;
</span><br>
<span class="quotelev1">&gt; +    $data-&gt;{r}                  = $params-&gt;{rev};
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     $ret-&gt;{module_data} = $data;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -131,6 +142,7 @@
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  sub get_version_from_filename {
</span><br>
<span class="quotelev1">&gt; +    Debug(&quot;get_version_from_filename got @_\n&quot;);
</span><br>
<span class="quotelev1">&gt;     my ($fullname) = @_;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     my $ret;
</span><br>
<span class="quotelev1">&gt; @@ -152,6 +164,7 @@
</span><br>
<span class="quotelev1">&gt;         $fullname = dirname($fullname);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +    Debug(&quot;get_version_from_filename returning $ret\n&quot;);
</span><br>
<span class="quotelev1">&gt;     return $ret;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-svn mailing list
</span><br>
<span class="quotelev1">&gt; mtt-svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
 tmattox_at_[hidden] || timattox_at_[hidden]
    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0309.php">Jeff Squyres: "[MTT devel] MTT static site problem"</a>
<li><strong>Previous message:</strong> <a href="0307.php">Ethan Mallove: "Re: [MTT devel] Time to make the 2009 mtt database partitions?"</a>
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
