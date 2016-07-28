<?
$subject_val = "Re: [MTT devel] [MTT svn] svn:mtt-svn r1377";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  3 08:46:50 2011" -->
<!-- isoreceived="20110103134650" -->
<!-- sent="Mon, 3 Jan 2011 08:46:45 -0500" -->
<!-- isosent="20110103134645" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT svn] svn:mtt-svn r1377" -->
<!-- id="8DB34CFB-A419-4EDD-9148-6C93698E94AF_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTincpckjV9hnif_LxjQYgfrgyb7whL73tnLmneiR_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] [MTT svn] svn:mtt-svn r1377<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-03 08:46:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0544.php">Mike Dubman: "[MTT devel] mtt questions"</a>
<li><strong>Previous message:</strong> <a href="0542.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1377"</a>
<li><strong>In reply to:</strong> <a href="0542.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1377"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, that's what I thought, but your comment doesn't seem to match this:
<br>
<p># mtt_switch(@np@, 9, &quot;return1&quot;, 100, return2&quot;, &quot;default&quot;, 0);
<br>
<p>You have an extra &quot;return&quot; in there, and the 5th argument doesn't seem to be quoted properly.
<br>
<p><p><p>On Jan 3, 2011, at 8:21 AM, Mike Dubman wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; it is c-style *switch* replacement, to simplify statements like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; transport       = &amp;if (&amp;eq('@cycle@', '1'), '@btl_openib@' ,\
</span><br>
<span class="quotelev1">&gt;                      &amp;if (&amp;eq('@cycle@', '2'), '@btl_openib@',\
</span><br>
<span class="quotelev1">&gt;                        &amp;if (&amp;eq('@cycle@', '3'), '@btl_eth10g@',\
</span><br>
<span class="quotelev1">&gt;                          &amp;if (&amp;eq('@cycle@', '4'), '@btl_eth10g@',\
</span><br>
<span class="quotelev1">&gt;                            &amp;if (&amp;eq('@cycle@', '3a'), '@btl_eth10g@ -x custom_noswitchconnect=1',\
</span><br>
<span class="quotelev1">&gt;                              &amp;if (&amp;eq('@cycle@', '4a'), '@btl_eth10g@ -x custom_noswitchconnect=1',\
</span><br>
<span class="quotelev1">&gt;                                &amp;if (&amp;eq('@cycle@', '5'), '@btl_eth10g@',\
</span><br>
<span class="quotelev1">&gt;                                  &amp;if (&amp;eq('@cycle@', '6'), '@btl_eth10g@',\
</span><br>
<span class="quotelev1">&gt;                                    &amp;if (&amp;eq('@cycle@', '7'), '@btl_eth10g@',\
</span><br>
<span class="quotelev1">&gt;                                      &amp;if (&amp;eq('@cycle@', '8'), '@btl_eth10g@',\
</span><br>
<span class="quotelev1">&gt;                                        &amp;if (&amp;eq('@cycle@', '11'), '@btl_eth10g@',\
</span><br>
<span class="quotelev1">&gt;                                          &amp;if (&amp;eq('@cycle@', '12'), '@btl_eth10g@',\
</span><br>
<span class="quotelev1">&gt;                                            '@btl_rdmaoe@'\
</span><br>
<span class="quotelev1">&gt;                                          )\
</span><br>
<span class="quotelev1">&gt;                                        )\
</span><br>
<span class="quotelev1">&gt;                                      )\
</span><br>
<span class="quotelev1">&gt;                                    )\
</span><br>
<span class="quotelev1">&gt;                                  )\
</span><br>
<span class="quotelev1">&gt;                                )\
</span><br>
<span class="quotelev1">&gt;                              )\
</span><br>
<span class="quotelev1">&gt;                            )\
</span><br>
<span class="quotelev1">&gt;                          )\
</span><br>
<span class="quotelev1">&gt;                        )\
</span><br>
<span class="quotelev1">&gt;                     )\
</span><br>
<span class="quotelev1">&gt;                   )
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; which can be rewritten as:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; transport = mtt_switch(@cycle@, 1, @btl_openib@, 2, @btl_eth10g@, ...)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Will update wiki as well.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Jan 3, 2011 at 2:54 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Mike --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you explain this one a little?  I don't understand the example you gave in the comment.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, are you adding all the new funclets to the wiki documentation?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 29, 2010, at 3:52 AM, miked_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Author: miked
</span><br>
<span class="quotelev2">&gt; &gt; Date: 2010-12-29 03:52:24 EST (Wed, 29 Dec 2010)
</span><br>
<span class="quotelev2">&gt; &gt; New Revision: 1377
</span><br>
<span class="quotelev2">&gt; &gt; URL: <a href="https://svn.open-mpi.org/trac/mtt/changeset/1377">https://svn.open-mpi.org/trac/mtt/changeset/1377</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Log:
</span><br>
<span class="quotelev2">&gt; &gt; added mtt_switch to simplify if-then-else cases in ini files
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Text files modified:
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/lib/MTT/Values/Functions.pm |    21 +++++++++++++++++++++
</span><br>
<span class="quotelev2">&gt; &gt;   1 files changed, 21 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/lib/MTT/Values/Functions.pm
</span><br>
<span class="quotelev2">&gt; &gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/lib/MTT/Values/Functions.pm (original)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/lib/MTT/Values/Functions.pm 2010-12-29 03:52:24 EST (Wed, 29 Dec 2010)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -3163,4 +3163,25 @@
</span><br>
<span class="quotelev2">&gt; &gt;       return $x-&gt;{result_stdout};
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; +#
</span><br>
<span class="quotelev2">&gt; &gt; +# Poor man switch statement
</span><br>
<span class="quotelev2">&gt; &gt; +# Example: mtt_switch(@np@, 9, &quot;return1&quot;, 100, return2&quot;, &quot;default&quot;, 0);
</span><br>
<span class="quotelev2">&gt; &gt; +#
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +sub mtt_switch
</span><br>
<span class="quotelev2">&gt; &gt; +{
</span><br>
<span class="quotelev2">&gt; &gt; +    my ($var, %cases) = @_;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    if ($cases{$var}) {
</span><br>
<span class="quotelev2">&gt; &gt; +        return $cases{$var};
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    if ($cases{'default'}) {
</span><br>
<span class="quotelev2">&gt; &gt; +        return $cases{'default'};
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    Debug(&quot;ERROR: Not found case for $var\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; 1;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; mtt-svn mailing list
</span><br>
<span class="quotelev2">&gt; &gt; mtt-svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0544.php">Mike Dubman: "[MTT devel] mtt questions"</a>
<li><strong>Previous message:</strong> <a href="0542.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1377"</a>
<li><strong>In reply to:</strong> <a href="0542.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1377"</a>
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
