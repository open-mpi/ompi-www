<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 25 10:15:30 2007" -->
<!-- isoreceived="20070925141530" -->
<!-- sent="Tue, 25 Sep 2007 10:15:26 -0400" -->
<!-- isosent="20070925141526" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT devel] if whatami is missing..." -->
<!-- id="20070925141526.GB1913_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5BB8EA63-1EB7-4D1B-AC8D-DF7F24EEBA69_at_cisco.com" -->
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
<strong>Date:</strong> 2007-09-25 10:15:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0130.php">Jeff Squyres: "Re: [MTT devel] if whatami is missing..."</a>
<li><strong>Previous message:</strong> <a href="0128.php">Jeff Squyres: "[MTT devel] If jpgraph is missing..."</a>
<li><strong>In reply to:</strong> <a href="0127.php">Jeff Squyres: "[MTT devel] if whatami is missing..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0130.php">Jeff Squyres: "Re: [MTT devel] if whatami is missing..."</a>
<li><strong>Reply:</strong> <a href="0130.php">Jeff Squyres: "Re: [MTT devel] if whatami is missing..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Sep/24/2007 09:00:32PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; If the &quot;whatami&quot; shell script is missing and we get blank values for  
</span><br>
<span class="quotelev1">&gt; the following fields, should we error/abort the MTT client?  I'm  
</span><br>
<span class="quotelev1">&gt; thinking yes... opinions?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - platform_type
</span><br>
<span class="quotelev1">&gt; - platform_hardware
</span><br>
<span class="quotelev1">&gt; - os_name
</span><br>
<span class="quotelev1">&gt; - os_version
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All of these fields are settable from the INI file (in the [MTT]  
</span><br>
<span class="quotelev1">&gt; section).  The default value for them is to invoke &amp;whatami() (with  
</span><br>
<span class="quotelev1">&gt; various arguments, which ends up invoking the &quot;whatami&quot; executable)  
</span><br>
<span class="quotelev1">&gt; to get the values.  So most people won't need to do anything.  But  
</span><br>
<span class="quotelev1">&gt; when we go to an MTT tarball that does not ship &quot;whatami&quot;, it is  
</span><br>
<span class="quotelev1">&gt; plausible that you might get empty values for these fields without  
</span><br>
<span class="quotelev1">&gt; realizing it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thoughts?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>How about we first go with Plan C: uname (if it's
<br>
available).
<br>
<p>&nbsp;&nbsp;platform_type = &amp;shell(&quot;uname -p&quot;)
<br>
&nbsp;&nbsp;platform_hardware = &amp;shell(&quot;uname -m&quot;)
<br>
&nbsp;&nbsp;os_name = &amp;shell(&quot;uname -s&quot;)
<br>
&nbsp;&nbsp;os_version = &amp;shell(&quot;uname -v&quot;)
<br>
<p>Otherwise default to &quot;unknown&quot;.
<br>
<p>So the we go down this list:
<br>
<p>&nbsp;&nbsp;1. User-specified in INI
<br>
&nbsp;&nbsp;2. whatami
<br>
&nbsp;&nbsp;3. uname
<br>
&nbsp;&nbsp;4. &quot;unknown&quot;
<br>
<p>-Ethan
<br>
<p><span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0130.php">Jeff Squyres: "Re: [MTT devel] if whatami is missing..."</a>
<li><strong>Previous message:</strong> <a href="0128.php">Jeff Squyres: "[MTT devel] If jpgraph is missing..."</a>
<li><strong>In reply to:</strong> <a href="0127.php">Jeff Squyres: "[MTT devel] if whatami is missing..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0130.php">Jeff Squyres: "Re: [MTT devel] if whatami is missing..."</a>
<li><strong>Reply:</strong> <a href="0130.php">Jeff Squyres: "Re: [MTT devel] if whatami is missing..."</a>
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
