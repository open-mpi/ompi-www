<?
$subject_val = "[OMPI devel] Fixes to OpenMPI-1.4.2 for PGI compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 17 18:26:45 2010" -->
<!-- isoreceived="20100817222645" -->
<!-- sent="Tue, 17 Aug 2010 15:26:39 -0700" -->
<!-- isosent="20100817222639" -->
<!-- name="Larry Baker" -->
<!-- email="baker_at_[hidden]" -->
<!-- subject="[OMPI devel] Fixes to OpenMPI-1.4.2 for PGI compilers" -->
<!-- id="871F58D2-C9E8-4CC3-8D0F-FC02BFF120F5_at_usgs.gov" -->
<!-- charset="WINDOWS-1252" -->
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
<strong>Subject:</strong> [OMPI devel] Fixes to OpenMPI-1.4.2 for PGI compilers<br>
<strong>From:</strong> Larry Baker (<em>baker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-17 18:26:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8286.php">Ralf Wildenhues: "Re: [OMPI devel] Fixes to OpenMPI-1.4.2 for PGI compilers"</a>
<li><strong>Previous message:</strong> <a href="8284.php">Jeff Squyres: "[OMPI devel] 1.5rc5 has been posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8286.php">Ralf Wildenhues: "Re: [OMPI devel] Fixes to OpenMPI-1.4.2 for PGI compilers"</a>
<li><strong>Reply:</strong> <a href="8286.php">Ralf Wildenhues: "Re: [OMPI devel] Fixes to OpenMPI-1.4.2 for PGI compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I patched OpenMPI 1.4.2 to fix some problems/warnings when using the  
<br>
PGI compilers.
<br>
<p>&#149; openmpi-1.4.2/configure has the libtool patch to correctly parse PGI  
<br>
compiler versions 1 through 5, but the libtool.m4 files do not.  I  
<br>
don't know if they are actually used -- I looked for this error before  
<br>
I tried compiling.  The fixes to the libtool.m4 files are:
<br>
<p># Fixes to correctly identify PGI compiler versions 1 through 5
<br>
mv openmpi-1.4.2/config/libtool.m4{,.original}
<br>
sed -e '5899s/\[\[1-5\]\]\*/\[\[1-5\]\].\*/g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;openmpi-1.4.2/config/libtool.m4.original \
<br>
<span class="quotelev1">     &gt;openmpi-1.4.2/config/libtool.m4
</span><br>
mv openmpi-1.4.2/opal/libltdl/m4/libtool.m4{,.original}
<br>
sed -e '5899s/\[\[1-5\]\]\*/\[\[1-5\]\].\*/g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;openmpi-1.4.2/opal/libltdl/m4/libtool.m4.original \
<br>
<span class="quotelev1">     &gt;openmpi-1.4.2/opal/libltdl/m4/libtool.m4
</span><br>
<p>&#149; Inline assembly of the atomic operators is explicitly disabled for  
<br>
PGI C in openmpi-1.4.2/configure, but not for PGI C++.  I applied the  
<br>
same fix in openmpi-1.4.2/configure for PGI C++.
<br>
&#149; openmpi-1.4.2/configure tests whether the C and C++ compilers accept  
<br>
#pragma ident.  However, PGI C does not perform macro substitution in  
<br>
#pragma ident, which OpenMPI relies on.  The fix is to use a more  
<br>
complete test of the #pragma ident feature in openmpi-1.4.2/ 
<br>
configure.  The fixes to openmpi-1.4.2/configure are:
<br>
<p># Disable inline assembly for PGI C++, as is done for PGI C (34579), and
<br>
# Fix PGI C compiler warning (10393, 26106): Pragma ignored &#150; string
<br>
# expected after #pragma ident
<br>
mv openmpi-1.4.2/configure{,.original}
<br>
sed -e '34579{x;s/^.*$/    if test &quot;$ompi_cv_cxx_compiler_vendor&quot; =  
<br>
&quot;portland group&quot; ; then/;p;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;s/^.*$/        # PGI seems to have some issues with  
<br>
our inline assembly./;p;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;s/^.*$/        # Disable for now./;p;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;s/^.*$/        asm_result=&quot;no (Portland Group)&quot;/;p;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;s/^.*$/    else/;G;}' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e '34702{x;s/^.*$/    fi/;G;}' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e '10393{s/#pragma ident/#define IDENT/;p;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;s/^.*$/#pragma ident \$IDENT/;}' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e '26106{s/#pragma ident/#define IDENT/;p;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;s/^.*$/#pragma ident \$IDENT/;}' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;openmpi-1.4.2/configure.original \
<br>
<span class="quotelev1">     &gt;openmpi-1.4.2/configure
</span><br>
chmod +x openmpi-1.4.2/configure
<br>
<p>&#149; PGI C issues spurious warnings when an array name is used as the  
<br>
first operand in a conditional expression.  This occurs in the  
<br>
definition of the LT_STRLEN() macro in openmpi-1.4.2/opal/libltdl/ 
<br>
ltdl.h: #define LT_STRLEN(s) (((s) &amp;&amp; (s)[0]) ? strlen (s) : 0).  Even  
<br>
though I think the PGI compiler is complaining too much, I also find  
<br>
C's use of 0 to mean zero, false, and nil poor programming practice.   
<br>
I changed the guard expression in the definition of LT_STRLEN to  
<br>
simply (s!=NULL), which also eliminated the short-circuit test (s) 
<br>
[0].  The extra test is not required for strlen() to succeed, and only  
<br>
makes sense if zero-length strings are a common occurrence worth hand- 
<br>
optimizing.  The fix to openmpi-1.4.2/opal/libltdl/ltdl.h is:
<br>
<p># Fix PGI compiler warning: Array name used in logical expression
<br>
mv openmpi-1.4.2/opal/libltdl/ltdl.h{,.original}
<br>
sed -e '44s/((s) &amp;&amp; (s)\[0\])/(s!=NULL)/' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;openmpi-1.4.2/opal/libltdl/ltdl.h.original \
<br>
<span class="quotelev1">     &gt;openmpi-1.4.2/opal/libltdl/ltdl.h
</span><br>
<p>&#149; PGI C issues spurious warnings when 0 is one of the operands in a  
<br>
conditional expression of pointer type.  Even though I think the PGI  
<br>
compiler is again complaining too much, I replaced such occurrences of  
<br>
0 with NULL, which is my preferred programming practice.  The fixes to  
<br>
the hooks.c and malloc.c files in openmpi-1.4.2/opal/mca/memory/ 
<br>
ptmalloc2 are:
<br>
<p># Fix PGI compiler warning: Pointer value created from a nonlong  
<br>
integral type
<br>
mv openmpi-1.4.2/opal/mca/memory/ptmalloc2/hooks.c{,.original}
<br>
sed -e '434s/: 0;/: NULL;/' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e '449s/: 0;/: NULL;/' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;openmpi-1.4.2/opal/mca/memory/ptmalloc2/hooks.c.original \
<br>
<span class="quotelev1">     &gt;openmpi-1.4.2/opal/mca/memory/ptmalloc2/hooks.c
</span><br>
mv openmpi-1.4.2/opal/mca/memory/ptmalloc2/malloc.c{,.original}
<br>
sed -e '3446s/: 0,/: NULL,/' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e '3664s/: 0,/: NULL,/' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e '3789s/: 0,/: NULL,/' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;openmpi-1.4.2/opal/mca/memory/ptmalloc2/malloc.c.original \
<br>
<span class="quotelev1">     &gt;openmpi-1.4.2/opal/mca/memory/ptmalloc2/malloc.c
</span><br>
<p>&#149; The only remaining complaint I get now from the PGI C compiler is  
<br>
for orte_base_log() in openmpi-1.4.2/orte/mca/notifier/base/ 
<br>
notifier_base_open.c:
<br>
<p>static void orte_base_log(int priority, const char *msg, ...)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/* just do nothing - it is here just so
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* someone calling it won't segv
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
}
<br>
<p>PGI C issues the following warning:
<br>
<p>PGC-W-0155-No va_start() seen  (base/notifier_base_open.c: 85)
<br>
<p>This is completely legal C, as far as I can tell from my copy of the  
<br>
1990 ISO C standard.  I didn't bother to fix this; I sent a bug report  
<br>
to PGI.
<br>
<p>Larry Baker
<br>
US Geological Survey
<br>
650-329-5608
<br>
baker_at_[hidden]
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8286.php">Ralf Wildenhues: "Re: [OMPI devel] Fixes to OpenMPI-1.4.2 for PGI compilers"</a>
<li><strong>Previous message:</strong> <a href="8284.php">Jeff Squyres: "[OMPI devel] 1.5rc5 has been posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8286.php">Ralf Wildenhues: "Re: [OMPI devel] Fixes to OpenMPI-1.4.2 for PGI compilers"</a>
<li><strong>Reply:</strong> <a href="8286.php">Ralf Wildenhues: "Re: [OMPI devel] Fixes to OpenMPI-1.4.2 for PGI compilers"</a>
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
