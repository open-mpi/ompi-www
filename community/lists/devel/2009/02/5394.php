<?
$subject_val = "Re: [OMPI devel] likely bad return from MPI_File_c2f";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 10 19:49:19 2009" -->
<!-- isoreceived="20090211004919" -->
<!-- sent="Tue, 10 Feb 2009 16:49:13 -0800" -->
<!-- isosent="20090211004913" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] likely bad return from MPI_File_c2f" -->
<!-- id="93949A3B-BE2F-4EA5-BEDF-333144A87B0E_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="e7ba66e40902101406s3a41d450h97659f3830c6984e_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] likely bad return from MPI_File_c2f<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-10 19:49:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5395.php">Mike Dubman: "[OMPI devel] PML/ob1 problem"</a>
<li><strong>Previous message:</strong> <a href="5393.php">Lisandro Dalcin: "[OMPI devel] likely bad return from MPI_File_c2f"</a>
<li><strong>In reply to:</strong> <a href="5393.php">Lisandro Dalcin: "[OMPI devel] likely bad return from MPI_File_c2f"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gah!  You're absolutely right.  A while ago, we fixed comm_c2f and  
<br>
win_c2f, but somehow missed file_c2f.
<br>
<p>Fixed on the trunk in r20511.  I'll try to get this into v1.3.1.
<br>
<p><p>On Feb 10, 2009, at 2:06 PM, Lisandro Dalcin wrote:
<br>
<p><span class="quotelev1">&gt; Try to run the trivial program below. I MPI_File_c2f(MPI_FILE_NULL)
</span><br>
<span class="quotelev1">&gt; returns &quot;-1&quot; (minus one), however it seems the routine should return
</span><br>
<span class="quotelev1">&gt; &quot;0&quot; (zero).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; int main()
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;  MPI_Fint i;
</span><br>
<span class="quotelev1">&gt;  MPI_File f;
</span><br>
<span class="quotelev1">&gt;  MPI_Init(0,0);
</span><br>
<span class="quotelev1">&gt;  i = MPI_File_c2f(MPI_FILE_NULL);
</span><br>
<span class="quotelev1">&gt;  printf(&quot;MPI_File_c2f(MPI_FILE_NULL) -&gt; %d\n&quot;, i);
</span><br>
<span class="quotelev1">&gt;  f = MPI_File_f2c(0);
</span><br>
<span class="quotelev1">&gt;  printf(&quot;MPI_File_f2c(0) == MPI_FILE_NULL -&gt; %s\n&quot;, (f ==
</span><br>
<span class="quotelev1">&gt; MPI_FILE_NULL)?&quot;yes&quot;:&quot;no&quot;);
</span><br>
<span class="quotelev1">&gt;  MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Lisandro Dalc&#237;n
</span><br>
<span class="quotelev1">&gt; ---------------
</span><br>
<span class="quotelev1">&gt; Centro Internacional de M&#233;todos Computacionales en Ingenier&#237;a (CIMEC)
</span><br>
<span class="quotelev1">&gt; Instituto de Desarrollo Tecnol&#243;gico para la Industria Qu&#237;mica (INTEC)
</span><br>
<span class="quotelev1">&gt; Consejo Nacional de Investigaciones Cient&#237;ficas y T&#233;cnicas (CONICET)
</span><br>
<span class="quotelev1">&gt; PTLC - G&#252;emes 3450, (3000) Santa Fe, Argentina
</span><br>
<span class="quotelev1">&gt; Tel/Fax: +54-(0)342-451.1594
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="5395.php">Mike Dubman: "[OMPI devel] PML/ob1 problem"</a>
<li><strong>Previous message:</strong> <a href="5393.php">Lisandro Dalcin: "[OMPI devel] likely bad return from MPI_File_c2f"</a>
<li><strong>In reply to:</strong> <a href="5393.php">Lisandro Dalcin: "[OMPI devel] likely bad return from MPI_File_c2f"</a>
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
