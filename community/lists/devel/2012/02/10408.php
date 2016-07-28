<?
$subject_val = "Re: [OMPI devel] Question about opal/mca/memory/linux licensing";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 14 06:20:31 2012" -->
<!-- isoreceived="20120214112031" -->
<!-- sent="Tue, 14 Feb 2012 06:20:25 -0500" -->
<!-- isosent="20120214112025" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Question about opal/mca/memory/linux licensing" -->
<!-- id="16434CEC-8DD1-4292-B7C2-7B3020BD9530_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CABTqbtKKX908DQ7LxSAEkow6k4soV6js4QOhBDzTfXdOy7qTEQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Question about opal/mca/memory/linux licensing<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-14 06:20:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10409.php">Denis Nagorny: "Re: [OMPI devel] Question about opal/mca/memory/linux licensing"</a>
<li><strong>Previous message:</strong> <a href="10407.php">Denis Nagorny: "[OMPI devel] Question about opal/mca/memory/linux licensing"</a>
<li><strong>In reply to:</strong> <a href="10407.php">Denis Nagorny: "[OMPI devel] Question about opal/mca/memory/linux licensing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10409.php">Denis Nagorny: "Re: [OMPI devel] Question about opal/mca/memory/linux licensing"</a>
<li><strong>Reply:</strong> <a href="10409.php">Denis Nagorny: "Re: [OMPI devel] Question about opal/mca/memory/linux licensing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 14, 2012, at 6:09 AM, Denis Nagorny wrote:
<br>
<p><span class="quotelev1">&gt; Investigating memory management implementation in OpenMPI I found that opal's memory module licensed under Lesser GPL terms.
</span><br>
<p>I assume you're referring to the ptmalloc implementation under opal/mca/memory/linux, right?
<br>
<p>If, so, please read its licensing terms a little closer.  
<br>
<p>It specifically allows us to include it under the same terms as the overall package of Open MPI, meaning the modified-BSD-like license in the top-level LICENSE file.  
<br>
<p>Specifically, see opal/mca/memory/linux/README-ptmalloc.txt (for the web archives: <a href="https://svn.open-mpi.org/trac/ompi/browser/trunk/opal/mca/memory/linux/README-ptmalloc2.txt">https://svn.open-mpi.org/trac/ompi/browser/trunk/opal/mca/memory/linux/README-ptmalloc2.txt</a>), where it says:
<br>
<p>-----
<br>
As part of the GNU C library, the source files are available under the
<br>
GNU Library General Public License (see the comments in the files).
<br>
But as part of this stand-alone package, the code is also available
<br>
under the (probably less restrictive) conditions described in the file
<br>
'COPYRIGHT'.  In any case, there is no warranty whatsoever for this
<br>
package.
<br>
-----
<br>
<p>And for the web archives, the COPYRIGHT file says (<a href="https://svn.open-mpi.org/trac/ompi/browser/trunk/opal/mca/memory/linux/COPYRIGHT-ptmalloc2.txt">https://svn.open-mpi.org/trac/ompi/browser/trunk/opal/mca/memory/linux/COPYRIGHT-ptmalloc2.txt</a>):
<br>
<p>-----
<br>
Copyright (c) 2001-2004 Wolfram Gloger
<br>
<p>Permission to use, copy, modify, distribute, and sell this software
<br>
and its documentation for any purpose is hereby granted without fee,
<br>
provided that (i) the above copyright notices and this permission
<br>
notice appear in all copies of the software and related documentation,
<br>
and (ii) the name of Wolfram Gloger may not be used in any advertising
<br>
or publicity relating to the software.
<br>
<p>THE SOFTWARE IS PROVIDED &quot;AS-IS&quot; AND WITHOUT WARRANTY OF ANY KIND,
<br>
EXPRESS, IMPLIED OR OTHERWISE, INCLUDING WITHOUT LIMITATION, ANY
<br>
WARRANTY OF MERCHANTABILITY OR FITNESS FOR A PARTICULAR PURPOSE.
<br>
<p>IN NO EVENT SHALL WOLFRAM GLOGER BE LIABLE FOR ANY SPECIAL,
<br>
INCIDENTAL, INDIRECT OR CONSEQUENTIAL DAMAGES OF ANY KIND, OR ANY
<br>
DAMAGES WHATSOEVER RESULTING FROM LOSS OF USE, DATA OR PROFITS,
<br>
WHETHER OR NOT ADVISED OF THE POSSIBILITY OF DAMAGE, AND ON ANY THEORY
<br>
OF LIABILITY, ARISING OUT OF OR IN CONNECTION WITH THE USE OR
<br>
PERFORMANCE OF THIS SOFTWARE.
<br>
-----
<br>
<p>Which to my understanding, and the lawyers who have reviewed this, is compatible with Open MPI's BSD-like licensing.
<br>
<p>Obvious disclaimer: IANAL and this is not legal advice.
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="10409.php">Denis Nagorny: "Re: [OMPI devel] Question about opal/mca/memory/linux licensing"</a>
<li><strong>Previous message:</strong> <a href="10407.php">Denis Nagorny: "[OMPI devel] Question about opal/mca/memory/linux licensing"</a>
<li><strong>In reply to:</strong> <a href="10407.php">Denis Nagorny: "[OMPI devel] Question about opal/mca/memory/linux licensing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10409.php">Denis Nagorny: "Re: [OMPI devel] Question about opal/mca/memory/linux licensing"</a>
<li><strong>Reply:</strong> <a href="10409.php">Denis Nagorny: "Re: [OMPI devel] Question about opal/mca/memory/linux licensing"</a>
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
