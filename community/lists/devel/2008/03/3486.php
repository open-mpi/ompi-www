<?
$subject_val = "[OMPI devel] IRIX autoconf failure.";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 21 08:57:35 2008" -->
<!-- isoreceived="20080321125735" -->
<!-- sent="Fri, 21 Mar 2008 23:57:25 +1100" -->
<!-- isosent="20080321125725" -->
<!-- name="Regan Russell" -->
<!-- email="regan_russell_at_[hidden]" -->
<!-- subject="[OMPI devel] IRIX autoconf failure." -->
<!-- id="BAY118-W23AF69DBAA7353ABCAF5F28D010_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] IRIX autoconf failure.<br>
<strong>From:</strong> Regan Russell (<em>regan_russell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-21 08:57:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3487.php">Ralph H Castain: "Re: [OMPI devel] Switching away from SVN?"</a>
<li><strong>Previous message:</strong> <a href="3485.php">Jeff Squyres: "Re: [OMPI devel] Switching away from SVN?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3491.php">Brian W. Barrett: "Re: [OMPI devel] IRIX autoconf failure."</a>
<li><strong>Reply:</strong> <a href="3491.php">Brian W. Barrett: "Re: [OMPI devel] IRIX autoconf failure."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am having problems with the Assembler section of the  GNU autoconf stuff on OpenMPI.
<br>
Is anyone willing to work with me to get this up and running...?
<br>
<p>*** Assembler
<br>
checking dependency style of gcc... gcc3
<br>
checking for BSD- or MS-compatible name lister (nm)... /usr/bin/nm -B
<br>
checking the name lister (/usr/bin/nm -B) interface... BSD nm
<br>
checking for fgrep... /sbin/grep -F
<br>
checking if need to remove -g from CCASFLAGS... no
<br>
checking whether to enable smp locks... yes
<br>
checking if .proc/endp is needed... no
<br>
checking directive for setting text section... .text
<br>
checking directive for exporting symbols... .globl
<br>
checking for objdump... no
<br>
checking if .note.GNU-stack is needed... no
<br>
checking suffix for labels... :
<br>
checking prefix for global symbol labels... none
<br>
configure: error: Could not determine global symbol label prefix
<br>
minnie:openmpi-1.2.6rc3r17884&gt; 
<br>
minnie:openmpi-1.2.6rc3r17884&gt; hinv
<br>
CPU: MIPS R14000 Processor Chip Revision: 2.4
<br>
FPU: MIPS R14010 Floating Point Chip Revision: 2.4
<br>
Processor 0: 600 MHZ IP35 
<br>
Processor 1: 600 MHZ IP35 
<br>
Processor 2: 600 MHZ IP35 
<br>
Processor 3: 600 MHZ IP35 
<br>
Processor 4: 500 MHZ IP35 
<br>
Processor 5: 500 MHZ IP35 
<br>
Processor 6: 500 MHZ IP35 
<br>
Processor 7: 500 MHZ IP35 
<br>
Main memory size: 8192 Mbytes
<br>
Instruction cache size: 32 Kbytes
<br>
Data cache size: 32 Kbytes
<br>
...
<br>
<p>minnie:openmpi-1.2.6rc3r17884&gt; uname -aR
<br>
IRIX64 minnie 6.5 6.5.25m 07080049 IP35
<br>
<p>cc -v
<br>
MIPSpro Compilers: Version 7.4.4m
<br>
<p><p>Thanks,
<br>
<p><p>Regan Russell BSc.
<br>
<p><p>_________________________________________________________________
<br>
Are you paid what you're worth? Find out: SEEK Salary Centre
<br>
<a href="http://a.ninemsn.com.au/b.aspx?URL=http%3A%2F%2Fninemsn%2Eseek%2Ecom%2Eau%2Fcareer%2Dresources%2Fsalary%2Dcentre%2F%3Ftracking%3Dsk%3Ahet%3Asc%3Anine%3A0%3Ahot%3Atext&amp;_t=764565661&amp;_r=OCT07_endtext_salary&amp;_m=EXT">http://a.ninemsn.com.au/b.aspx?URL=http%3A%2F%2Fninemsn%2Eseek%2Ecom%2Eau%2Fcareer%2Dresources%2Fsalary%2Dcentre%2F%3Ftracking%3Dsk%3Ahet%3Asc%3Anine%3A0%3Ahot%3Atext&amp;_t=764565661&amp;_r=OCT07_endtext_salary&amp;_m=EXT</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3487.php">Ralph H Castain: "Re: [OMPI devel] Switching away from SVN?"</a>
<li><strong>Previous message:</strong> <a href="3485.php">Jeff Squyres: "Re: [OMPI devel] Switching away from SVN?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3491.php">Brian W. Barrett: "Re: [OMPI devel] IRIX autoconf failure."</a>
<li><strong>Reply:</strong> <a href="3491.php">Brian W. Barrett: "Re: [OMPI devel] IRIX autoconf failure."</a>
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
