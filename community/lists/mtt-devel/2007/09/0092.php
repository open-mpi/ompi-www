<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 11 10:50:34 2007" -->
<!-- isoreceived="20070911145034" -->
<!-- sent="Tue, 11 Sep 2007 10:50:11 -0400" -->
<!-- isosent="20070911145011" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT svn] svn:mtt-svn r999" -->
<!-- id="F165D5CF-AB31-436A-BC40-E2C6595EEF38_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200709080342.l883gA1p012729_at_sourcehaven.osl.iu.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-11 10:50:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0093.php">Jeff Squyres: "Re: [MTT devel] No toggle for running autogen.sh in GNU_Install?"</a>
<li><strong>Previous message:</strong> <a href="0091.php">Jeff Squyres: "Re: [MTT devel] First cut at MTT web pages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0096.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r999"</a>
<li><strong>Reply:</strong> <a href="0096.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r999"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ethan --
<br>
<p>Is this more appropriate for a Sun-specific .pm file?
<br>
<p><p>On Sep 7, 2007, at 11:42 PM, emallove_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: emallove
</span><br>
<span class="quotelev1">&gt; Date: 2007-09-07 23:42:10 EDT (Fri, 07 Sep 2007)
</span><br>
<span class="quotelev1">&gt; New Revision: 999
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/mtt/changeset/999">https://svn.open-mpi.org/trac/mtt/changeset/999</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Added `&amp;MTT::Files::teamware_bringover()`.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;    tmp/jms-new-parser/lib/MTT/Files.pm |    16 ++++++++++++++++
</span><br>
<span class="quotelev1">&gt;    1 files changed, 16 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: tmp/jms-new-parser/lib/MTT/Files.pm
</span><br>
<span class="quotelev1">&gt; ====================================================================== 
</span><br>
<span class="quotelev1">&gt; ========
</span><br>
<span class="quotelev1">&gt; --- tmp/jms-new-parser/lib/MTT/Files.pm	(original)
</span><br>
<span class="quotelev1">&gt; +++ tmp/jms-new-parser/lib/MTT/Files.pm	2007-09-07 23:42:10 EDT  
</span><br>
<span class="quotelev1">&gt; (Fri, 07 Sep 2007)
</span><br>
<span class="quotelev1">&gt; @@ -301,6 +301,22 @@
</span><br>
<span class="quotelev1">&gt;      return undef;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +# Do a (Sun) TeamWare bringover
</span><br>
<span class="quotelev1">&gt; +sub teamware_bringover {
</span><br>
<span class="quotelev1">&gt; +    my ($file_list_program, $parent, $child, $path) = @_;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    my $str;
</span><br>
<span class="quotelev1">&gt; +    $str .= &quot;bringover&quot;;
</span><br>
<span class="quotelev1">&gt; +    $str .= &quot; -p $parent&quot;;
</span><br>
<span class="quotelev1">&gt; +    $str .= &quot; -w $child&quot;;
</span><br>
<span class="quotelev1">&gt; +    $str .= &quot; $path&quot;;
</span><br>
<span class="quotelev1">&gt; +    $str .= &quot; -f $file_list_program\n&quot;;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    my $ret = MTT::DoCommand::Cmd(1, $str);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    return $ret;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; #--------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  # Copy and entire file tree
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-svn mailing list
</span><br>
<span class="quotelev1">&gt; mtt-svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0093.php">Jeff Squyres: "Re: [MTT devel] No toggle for running autogen.sh in GNU_Install?"</a>
<li><strong>Previous message:</strong> <a href="0091.php">Jeff Squyres: "Re: [MTT devel] First cut at MTT web pages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0096.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r999"</a>
<li><strong>Reply:</strong> <a href="0096.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r999"</a>
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
