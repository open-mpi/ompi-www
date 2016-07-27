<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 24 10:11:06 2007" -->
<!-- isoreceived="20070824141106" -->
<!-- sent="Fri, 24 Aug 2007 10:10:31 -0400" -->
<!-- isosent="20070824141031" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Cisco submits to Josh DB" -->
<!-- id="E4EDCD3A-B321-4DCA-8A2A-5390A60A4F25_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070824134601.GX11675_at_sun.com" -->
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
<strong>Date:</strong> 2007-08-24 10:10:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0004.php">Josh Hursey: "[MTT devel] MTT Database and Reporter Upgrade **Action Required**"</a>
<li><strong>Previous message:</strong> <a href="0002.php">Ethan Mallove: "Re: [MTT devel] Cisco submits to Josh DB"</a>
<li><strong>In reply to:</strong> <a href="0002.php">Ethan Mallove: "Re: [MTT devel] Cisco submits to Josh DB"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 24, 2007, at 9:46 AM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; jms-new-parser is part of v3.0 too, right?
</span><br>
<p>I hope so.  :-)
<br>
<p><span class="quotelev1">&gt; I ran into issues with it:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's doing some funky things w/ my command:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   <a href="http://osl.iu.edu/~jjhursey/research/mtt/server/php/reporter.php">http://osl.iu.edu/~jjhursey/research/mtt/server/php/reporter.php</a>? 
</span><br>
<span class="quotelev1">&gt; do_redir=7
</span><br>
<p>I just filed a ticket about this: <a href="https://svn.open-mpi.org/trac/ompi/">https://svn.open-mpi.org/trac/ompi/</a> 
<br>
ticket/1141 -- can you upload the ini file that you used to generate  
<br>
this test run?
<br>
<p><span class="quotelev1">&gt; It repeats the command string 5 times in some spots.
</span><br>
<span class="quotelev1">&gt; And should &quot;network&quot; and &quot;runtime params&quot; be blank for:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   mpirun --mca btl self,tcp --host burl-ct-v440-4,burl-ct- 
</span><br>
<span class="quotelev1">&gt; v440-4,burl-ct-v440-4,burl-ct-v440-4,burl-ct-v440-5,burl-ct- 
</span><br>
<span class="quotelev1">&gt; v440-5,burl-ct-v440-5,burl-ct-v440-5 -np 2 --prefix /opt/SUNWhpc/ 
</span><br>
<span class="quotelev1">&gt; HPC7.0/ ./c_hello
</span><br>
<p>You need to add these fields into your mpi details section:
<br>
<p>parameters = &amp;MPI::OMPI::find_mpirun_params(&amp;test_command_line(), \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;test_executable())
<br>
network = &amp;MPI::OMPI::find_network(&amp;test_command_line(),  
<br>
&amp;test_executable())
<br>
<p>Obviously, they're OMPI-specific funclets.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0004.php">Josh Hursey: "[MTT devel] MTT Database and Reporter Upgrade **Action Required**"</a>
<li><strong>Previous message:</strong> <a href="0002.php">Ethan Mallove: "Re: [MTT devel] Cisco submits to Josh DB"</a>
<li><strong>In reply to:</strong> <a href="0002.php">Ethan Mallove: "Re: [MTT devel] Cisco submits to Josh DB"</a>
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
