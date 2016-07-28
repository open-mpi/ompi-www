<?
$subject_val = "Re: [OMPI devel] Loading Open MPI from MPJ Express (Java) fails";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 28 15:56:50 2014" -->
<!-- isoreceived="20140328195650" -->
<!-- sent="Fri, 28 Mar 2014 19:56:49 +0000" -->
<!-- isosent="20140328195649" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Loading Open MPI from MPJ Express (Java) fails" -->
<!-- id="4B08D7B0-024D-49EA-9AAC-D049C4F7340E_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CANFHntDxWp4_FLVr8vfNtuz46wf7EurDPYeoybPmmHZdefhpqQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Loading Open MPI from MPJ Express (Java) fails<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-28 15:56:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14426.php">Ralph Castain: "[OMPI devel] v1.8rc1 posted"</a>
<li><strong>Previous message:</strong> <a href="14424.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] &#181;&#170;&#206;`: &#181;&#170;&#206;`: doubt on latency result with OpenMPI library"</a>
<li><strong>In reply to:</strong> <a href="14398.php">Bibrak Qamar: "Re: [OMPI devel] Loading Open MPI from MPJ Express (Java) fails"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 26, 2014, at 2:10 PM, Bibrak Qamar &lt;bibrakc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 1) By heterogeneous do you mean Derived Datatypes?
</span><br>
<span class="quotelev1">&gt;        MPJ Express's buffering layer handles this. It flattens the data into a ByteBuffer. In this way native device doesn't have to worry about Derived Datatypes (those things are handled at top layers). And an interesting thing, intuitively Java users would use the MPI.OBJECT if there is heterogeneous data to be sent (but yes, MPI.OBJECT is a slow case  ...)
</span><br>
<p>No, I mean where one MPI process peer has a different data representation than another MPI process peer.  E.g., if one process is running on a little endian machine and another is running on a big endian machine.
<br>
<p>This is a pretty uncommon configuration, though.
<br>
<p><span class="quotelev1">&gt;        Currently same goes for user defined Op-functions. Those are handled at the top layers, i.e using MPJ Express's algorithms not native MPI's (but communication is native).
</span><br>
<p>This would seem to be a lot of duplicate code (i.e., down in MPI and up in the java bindings).  Plus, it might be problematic for things like one-sided operations...?
<br>
<p>Is there an advantage to that -- e.g., is the performance better somehow?
<br>
<p><span class="quotelev1">&gt; 2) API changes: Do you envision to document the changes to something like a mpiJava 1.3 specs or something?
</span><br>
<p>Oscar tells me that we have javadocs.
<br>
<p><span class="quotelev1">&gt; 3) New Benchmark Results:
</span><br>
<span class="quotelev1">&gt;        I did the benchmarking again with various configurations:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        i) Open MPI 1.7.4 C
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        ii) MVAPICH2.2 C
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        iii) MPJ Express (using Open MPI - with arrays)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        iv) Open MPI's Java Bindings (with a large user array -- the unoptimized case)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        v) Open MPI's Java Bindings (with arrays, where size of the user array is equal to the data point, to be fair)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        vi) MPJ Express (using MVAPICH2.2 - with arrays)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        vii) Open MPI's Java Bindings (using MPI.new&lt;Type&gt;Buffer, ByteBuffer)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        viii) MPJ Express (using Open MPI - with ByteBuffer, this is from the device layer of MPJ Express, this helps see how MPJ Express could perform if in future we add MPI.new&lt;Type&gt;Buffer like functionality)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        ix) MPJ Express (using MVAPICH2.2 - with ByteBuffer) --&gt; currently I don't know how it performs better than Open MPI?
</span><br>
<p>This is quite helpful; thanks.
<br>
<p>Looks like we really need to implement that optimization for not copying the entire buffer when the send size is &lt; the entire size of the buffer.
<br>
<p>I don't understand vii), though -- it looks like the bandwidth is quite low somehow. Hmm.
<br>
<p>Also, any idea what causes the MPJ performance degredation between Open MPI and MVAPICH?  With the native results, the Open MPI results are a tiny bit higher than MVAPICH, but with the MPJ results, the Open MPI results are quite a bit lower than MVAPICH.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14426.php">Ralph Castain: "[OMPI devel] v1.8rc1 posted"</a>
<li><strong>Previous message:</strong> <a href="14424.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] &#181;&#170;&#206;`: &#181;&#170;&#206;`: doubt on latency result with OpenMPI library"</a>
<li><strong>In reply to:</strong> <a href="14398.php">Bibrak Qamar: "Re: [OMPI devel] Loading Open MPI from MPJ Express (Java) fails"</a>
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
