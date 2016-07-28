<?
$subject_val = "Re: [OMPI devel] 1.5rc5 has been posted";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 19 17:13:27 2010" -->
<!-- isoreceived="20100819211327" -->
<!-- sent="Thu, 19 Aug 2010 14:13:22 -0700" -->
<!-- isosent="20100819211322" -->
<!-- name="Larry Baker" -->
<!-- email="baker_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.5rc5 has been posted" -->
<!-- id="9F9489DD-E164-4227-B92A-08336220E9A8_at_usgs.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E90B71C7-2B75-4613-9F41-E6D0F2939F61_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.5rc5 has been posted<br>
<strong>From:</strong> Larry Baker (<em>baker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-19 17:13:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8301.php">Larry Baker: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
<li><strong>Previous message:</strong> <a href="8299.php">Larry Baker: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
<li><strong>In reply to:</strong> <a href="8284.php">Jeff Squyres: "[OMPI devel] 1.5rc5 has been posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8301.php">Larry Baker: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The PGI C compiler complains (issues a warning) for the #pragma ident  
<br>
in opal/runtime/opal_init.c:
<br>
<p>PGC-W-0281-Pragma ignored - string expected after #pragma ident  (../ 
<br>
opal/util/sys_limits.h: 58)
<br>
<p>This is because the PCI C compiler does not (whereas, curiously, the  
<br>
PGI C++ compiler does) support macro substitution in a #pragma ident,  
<br>
which is the form of all the #pragma ident statements in OpenMPI:
<br>
<p>[baker_at_hydra openmpi-1.5rc5]$ find . -name \*.c -exec grep -w &quot;#pragma  
<br>
ident&quot; {} ';' -print
<br>
#pragma ident OMPI_IDENT_STRING
<br>
./ompi/runtime/ompi_mpi_init.c
<br>
#pragma ident OMPI_IDENT_STRING
<br>
./ompi/mpi/f77/init_f.c
<br>
#pragma ident OPAL_IDENT_STRING
<br>
./opal/runtime/opal_init.c
<br>
#pragma ident ORTE_IDENT_STRING
<br>
./orte/runtime/orte_init.c
<br>
<p>The test for support of the #pragma ident feature in configure (which  
<br>
appears twice: once for the C compiler, and once for the C++ compiler)  
<br>
tests only the case when the pragma has a literal string argument:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_ident=&quot;string_not_coincidentally_inserted_by_the_compiler&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cat &gt; conftest.c &lt;&lt;EOF
<br>
#pragma ident &quot;$ompi_ident&quot;
<br>
int main(int argc, char** argv);
<br>
int main(int argc, char** argv) { return 0; }
<br>
EOF
<br>
<p>However, that is not the form used by OpenMPI.  The code in configure  
<br>
should be changed to test the actual form of #pragma ident used by  
<br>
OpenMPI:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_ident=&quot;string_not_coincidentally_inserted_by_the_compiler&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cat &gt; conftest.c &lt;&lt;EOF
<br>
#define OMPI_IDENT &quot;$ompi_ident&quot;
<br>
#pragma ident OMPI_IDENT
<br>
int main(int argc, char** argv);
<br>
int main(int argc, char** argv) { return 0; }
<br>
EOF
<br>
<p>When this code is used instead (twice), the PGI C compiler fails the  
<br>
configure test for #prgma ident support, as it should.
<br>
<p>Larry Baker
<br>
US Geological Survey
<br>
650-329-5608
<br>
baker_at_[hidden]
<br>
<p>On Aug 17, 2010, at 2:18 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; We still have one known possible regression:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="https://svn.open-mpi.org/trac/ompi/ticket/2530">https://svn.open-mpi.org/trac/ompi/ticket/2530</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But we posted rc5 anyway (there's a bunch of stuff that has been  
</span><br>
<span class="quotelev1">&gt; pending for a while that is now in).  Please test!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/software/ompi/v1.5/">http://www.open-mpi.org/software/ompi/v1.5/</a>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8301.php">Larry Baker: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
<li><strong>Previous message:</strong> <a href="8299.php">Larry Baker: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
<li><strong>In reply to:</strong> <a href="8284.php">Jeff Squyres: "[OMPI devel] 1.5rc5 has been posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8301.php">Larry Baker: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
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
