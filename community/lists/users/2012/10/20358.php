<?
$subject_val = "Re: [OMPI users] Linking failure on Windows";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  2 00:08:23 2012" -->
<!-- isoreceived="20121002040823" -->
<!-- sent="Tue, 02 Oct 2012 17:08:17 +1300" -->
<!-- isosent="20121002040817" -->
<!-- name="Gib Bogle" -->
<!-- email="g.bogle_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Linking failure on Windows" -->
<!-- id="506A68B1.2020300_at_auckland.ac.nz" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="506A5785.7030606_at_khubla.com" -->
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
<strong>From:</strong> Gib Bogle (<em>g.bogle_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-02 00:08:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20359.php">Gib Bogle: "Re: [OMPI users] Linking failure on Windows"</a>
<li><strong>Previous message:</strong> <a href="20357.php">Damien Hocking: "Re: [OMPI users] Linking failure on Windows"</a>
<li><strong>In reply to:</strong> <a href="20355.php">Damien Hocking: "Re: [OMPI users] Linking failure on Windows"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Before I added OMPI_IMPORTS there were 8 errors, so it did help.
<br>
<p>Here is the link command in VS 2005:
<br>
<p>/OUT:&quot;E:\Sundials-Win32\examples\cvode\parallel\Release\cvAdvDiff_non_p.exe&quot; 
<br>
/VERSION:0.0 /INCREMENTAL:NO /NOLOGO /LIBPATH:&quot;c:\Program Files 
<br>
(x86)\OpenMPI_v1.6.2-win32\lib&quot; /MANIFEST 
<br>
/MANIFESTFILE:&quot;cvAdvDiff_non_p.dir\Release\cvAdvDiff_non_p.exe.intermediate.manifest&quot; 
<br>
/PDB:&quot;E:\Sundials-Win32\examples\cvode\parallel\Release/cvAdvDiff_non_p.pdb&quot; 
<br>
/SUBSYSTEM:CONSOLE 
<br>
/IMPLIB:&quot;E:\Sundials-Win32\examples\cvode\parallel\Release\cvAdvDiff_non_p.lib&quot; 
<br>
/ERRORREPORT:PROMPT kernel32.lib user32.lib gdi32.lib winspool.lib shell32.lib 
<br>
ole32.lib oleaut32.lib uuid.lib comdlg32.lib advapi32.lib shlwapi.lib ws2_32.lib 
<br>
..\..\..\src\cvode\Release\sundials_cvode.lib 
<br>
..\..\..\src\nvec_par\Release\sundials_nvecparallel.lib libmpi.lib 
<br>
libopen-pal.lib libopen-rte.lib  kernel32.lib user32.lib gdi32.lib winspool.lib 
<br>
comdlg32.lib advapi32.lib shell32.lib ole32.lib oleaut32.lib uuid.lib odbc32.lib 
<br>
odbccp32.lib
<br>
<p>Additional options:  /STACK:10000000 /machine:X86
<br>
<p>Gib
<br>
<p>On 2/10/2012 3:55 p.m., Damien Hocking wrote:
<br>
<span class="quotelev1">&gt; Gib,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you have OMPI_IMPORTS set that usually removes those symbol errors.  Are 
</span><br>
<span class="quotelev1">&gt; you absolutely sure you have everything set to 32-bit in Visual Studio?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20359.php">Gib Bogle: "Re: [OMPI users] Linking failure on Windows"</a>
<li><strong>Previous message:</strong> <a href="20357.php">Damien Hocking: "Re: [OMPI users] Linking failure on Windows"</a>
<li><strong>In reply to:</strong> <a href="20355.php">Damien Hocking: "Re: [OMPI users] Linking failure on Windows"</a>
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
