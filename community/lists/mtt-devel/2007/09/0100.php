<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 11 12:24:49 2007" -->
<!-- isoreceived="20070911162449" -->
<!-- sent="Tue, 11 Sep 2007 12:24:36 -0400" -->
<!-- isosent="20070911162436" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT svn] svn:mtt-svn r998" -->
<!-- id="0793B91D-2585-44CD-A14D-F251217EF8A5_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070911160638.GE1581_at_sun.com" -->
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
<strong>Date:</strong> 2007-09-11 12:24:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0101.php">Jeff Squyres: "[MTT devel] Merge to trunk done"</a>
<li><strong>Previous message:</strong> <a href="0099.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r998"</a>
<li><strong>In reply to:</strong> <a href="0099.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r998"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sounds good.
<br>
<p>On Sep 11, 2007, at 12:06 PM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; On Tue, Sep/11/2007 11:46:36AM, Ethan Mallove wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Sep/11/2007 10:50:35AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ethan --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Could you show the use case that motivated this change?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This test_executable was problematic: &quot;src/mpi2c++&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   --Calling: $ret = MTT::Values::Functions::MPI::OMPI::find_network 
</span><br>
<span class="quotelev2">&gt;&gt; (MTT::Values::Functions::test_command_line(),  
</span><br>
<span class="quotelev2">&gt;&gt; MTT::Values::Functions::t
</span><br>
<span class="quotelev2">&gt;&gt;   est_executable());
</span><br>
<span class="quotelev2">&gt;&gt;   &amp;test_command_line returning: mpirun --mca btl self,sm,tcp -- 
</span><br>
<span class="quotelev2">&gt;&gt; host burl-ct-v40z-0,burl-ct-v40z-0,burl-ct-v40z-0,burl-ct- 
</span><br>
<span class="quotelev2">&gt;&gt; v40z-0,burl-ct-v40z
</span><br>
<span class="quotelev2">&gt;&gt;   -1,burl-ct-v40z-1,burl-ct-v40z-1,burl-ct-v40z-1 -np 8 --prefix / 
</span><br>
<span class="quotelev2">&gt;&gt; opt/SUNWhpc src/mpi2c++_test
</span><br>
<span class="quotelev2">&gt;&gt;   &amp;test_executable returning: src/mpi2c++_test
</span><br>
<span class="quotelev2">&gt;&gt;   &amp;MPI::OMPI::find_network: got mpirun --mca btl self,sm,tcp -- 
</span><br>
<span class="quotelev2">&gt;&gt; host burl-ct-v40z-0,burl-ct-v40z-0,burl-ct-v40z-0,burl-ct- 
</span><br>
<span class="quotelev2">&gt;&gt; v40z-0,burl-ct-v40z
</span><br>
<span class="quotelev2">&gt;&gt;   -1,burl-ct-v40z-1,burl-ct-v40z-1,burl-ct-v40z-1 -np 8 --prefix / 
</span><br>
<span class="quotelev2">&gt;&gt; opt/SUNWhpc src/mpi2c++_test  src/mpi2c++_test
</span><br>
<span class="quotelev2">&gt;&gt;   *** ERROR: Could not evaluate: $ret =  
</span><br>
<span class="quotelev2">&gt;&gt; MTT::Values::Functions::MPI::OMPI::find_network 
</span><br>
<span class="quotelev2">&gt;&gt; (MTT::Values::Functions::test_command_line(), MTT::Va
</span><br>
<span class="quotelev2">&gt;&gt;   lues::Functions::test_executable());: Nested quantifiers in  
</span><br>
<span class="quotelev2">&gt;&gt; regex; marked by &lt;-- HERE in m/^(.+)\s*src/mpi2c++ &lt;-- HERE _test.+ 
</span><br>
<span class="quotelev2">&gt;&gt; $/ at /worksp
</span><br>
<span class="quotelev2">&gt;&gt;   ace/em162155/hpc/mtt/cron/jms-new-parser/lib/MTT/Values/ 
</span><br>
<span class="quotelev2">&gt;&gt; Functions/MPI/OMPI.pm line 102.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Actually, maybe $final should get run through &quot;quotemeta&quot;
</span><br>
<span class="quotelev1">&gt; instead (<a href="http://perldoc.perl.org/functions/quotemeta.html">http://perldoc.perl.org/functions/quotemeta.html</a>).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Ethan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 7, 2007, at 11:52 AM, emallove_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Author: emallove
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Date: 2007-09-07 11:52:04 EDT (Fri, 07 Sep 2007)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; New Revision: 998
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/mtt/changeset/998">https://svn.open-mpi.org/trac/mtt/changeset/998</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Escape the Perl regular expression quantifiers in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; `&amp;MPI::OMPI::find_network` (for test names such as
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; `mpic++`).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Text files modified:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    tmp/jms-new-parser/lib/MTT/Values/Functions/MPI/OMPI.pm |      
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 3 +++
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    1 files changed, 3 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Modified: tmp/jms-new-parser/lib/MTT/Values/Functions/MPI/OMPI.pm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; =================================================================== 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ===
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ========
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --- tmp/jms-new-parser/lib/MTT/Values/Functions/MPI/OMPI.pm	 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (original)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +++ tmp/jms-new-parser/lib/MTT/Values/Functions/MPI/OMPI.pm	
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2007-09-07 11:52:04 EDT (Fri, 07 Sep 2007)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -98,6 +98,9 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      # Ignore argv[0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      $str =~ s/^\s*\S+\s*(.+)$/\1/;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    # Escape the quantifiers (for test names such as &quot;mpi2c++&quot;)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    $final =~ s/(\?|\*|\+|\{|\})/\\$1/g;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      # Ignore everything beyond $final
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      $str =~ s/^(.+)\s*$final.+$/\1/;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Debug(&quot;Examining: $str\n&quot;);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mtt-svn mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mtt-svn_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
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
<li><strong>Next message:</strong> <a href="0101.php">Jeff Squyres: "[MTT devel] Merge to trunk done"</a>
<li><strong>Previous message:</strong> <a href="0099.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r998"</a>
<li><strong>In reply to:</strong> <a href="0099.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r998"</a>
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
