<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Aug 27 03:54:06 2005" -->
<!-- isoreceived="20050827085406" -->
<!-- sent="Sat, 27 Aug 2005 10:54:02 +0200" -->
<!-- isosent="20050827085402" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re:  OpenIB results" -->
<!-- id="20050827085402.GA4963_at_iam.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20050827023802.GS1685_at_kalmia.hozed.org" -->
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
<strong>Date:</strong> 2005-08-27 03:54:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0257.php">Jeff Squyres: "Re:  OpenIB results"</a>
<li><strong>Previous message:</strong> <a href="0255.php">Troy Benjegerdes: "Re:  OpenIB results"</a>
<li><strong>In reply to:</strong> <a href="0255.php">Troy Benjegerdes: "Re:  OpenIB results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0257.php">Jeff Squyres: "Re:  OpenIB results"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Troy,
<br>
<p>* Troy Benjegerdes wrote on Sat, Aug 27, 2005 at 04:38:02AM CEST:
<br>
<span class="quotelev1">&gt; On Fri, Aug 26, 2005 at 12:35:07PM -0400, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Aug 26, 2005, at 12:19 PM, Ralf Wildenhues wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (It would be good to augment the autogen.sh script so that it honored
</span><br>
<span class="quotelev3">&gt; &gt; &gt; a setting like ACLOCAL=&quot;path/to/aclocal -I ...&quot; (in Bourne shell speak)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; and similarly for AUTOMAKE, AUTOCONF, LIBTOOLIZE).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I have no objections to this...  :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; how's this? (I spent waaay to much time learning obscure shell stuff for
</span><br>
<span class="quotelev1">&gt; this)
</span><br>
<p>You beat me to it! :)
<br>
<p><span class="quotelev1">&gt; I allows me to do 
</span><br>
<span class="quotelev1">&gt; ACLOCAL='aclocal -I /usr/local/share/aclocal' ./autogen.sh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and it works a little better.. waiting for a build now.
</span><br>
<p>*snip*
<br>
<span class="quotelev1">&gt; +if [ -z &quot;$ACLOCAL&quot; ]; then	ompi_aclocal_search=&quot;aclocal&quot;
</span><br>
<span class="quotelev1">&gt; +else ompi_aclocal_search=$ACLOCAL
</span><br>
<span class="quotelev1">&gt; +fi
</span><br>
<p>If you want to be even more obscure, you can replace these three lines
<br>
with this single line:
<br>
&nbsp;: ${ACLOCAL=aclocal}
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0257.php">Jeff Squyres: "Re:  OpenIB results"</a>
<li><strong>Previous message:</strong> <a href="0255.php">Troy Benjegerdes: "Re:  OpenIB results"</a>
<li><strong>In reply to:</strong> <a href="0255.php">Troy Benjegerdes: "Re:  OpenIB results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0257.php">Jeff Squyres: "Re:  OpenIB results"</a>
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
