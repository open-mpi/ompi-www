<?
$subject_val = "Re: [OMPI devel] 1.4.5rc5 has been released";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  8 14:14:55 2012" -->
<!-- isoreceived="20120208191455" -->
<!-- sent="Wed, 08 Feb 2012 11:14:30 -0800" -->
<!-- isosent="20120208191430" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.4.5rc5 has been released" -->
<!-- id="4F32C996.4060907_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F325BA4.9080402_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.4.5rc5 has been released<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-08 14:14:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10342.php">Jeff Squyres: "[OMPI devel] Autotools update"</a>
<li><strong>Previous message:</strong> <a href="10340.php">TERRY DONTJE: "Re: [OMPI devel] 1.4.5rc5 has been released"</a>
<li><strong>In reply to:</strong> <a href="10339.php">TERRY DONTJE: "Re: [OMPI devel] 1.4.5rc5 has been released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10343.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc5 has been released"</a>
<li><strong>Reply:</strong> <a href="10343.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc5 has been released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2/8/2012 3:25 AM, TERRY DONTJE wrote:
<br>
<span class="quotelev2">&gt;&gt; + Building w/ Solaris Studio 12.2 or 12.3 on Linux x86-64, with 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;-m32&quot; required setting LD_LIBRARY_PATH.
</span><br>
<span class="quotelev1">&gt; Can the LD_LIBRARY_PATH be substituted with a rpath change in LDFLAGS 
</span><br>
<span class="quotelev1">&gt; of the build?
</span><br>
<p>Terry sent more specific instructions for that offlist, and I am testing 
<br>
now.
<br>
<p><span class="quotelev2">&gt;&gt; This is could either be Oracle's bug in the compiler, or a libtool 
</span><br>
<span class="quotelev2">&gt;&gt; problem.
</span><br>
<span class="quotelev2">&gt;&gt; My report was: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2012/01/10272.php">http://www.open-mpi.org/community/lists/devel/2012/01/10272.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; I thought I responded to the above issue.
</span><br>
<p>You did respond, but I didn't see any &quot;resolution&quot;.  I apologize if I 
<br>
missed something in the past emails.
<br>
<p><span class="quotelev1">&gt;   I think this may be a OS distribution (Solaris Studio assumption) 
</span><br>
<span class="quotelev1">&gt; issue.  On my RH system /lib contains the 32 libraries and /lib64 has 
</span><br>
<span class="quotelev1">&gt; the 64 bit libs.  I assume your system may have it the other way 
</span><br>
<span class="quotelev1">&gt; around (/lib = 64 bit libs and /lib32 has 32 bit).  Can you confirm 
</span><br>
<span class="quotelev1">&gt; that your /lib contains 64 bit libs.  Also can you do a &quot;cc -### -m32&quot; 
</span><br>
<span class="quotelev1">&gt; compile and link of a simple program and confirm that the compiler is 
</span><br>
<span class="quotelev1">&gt; pulling in /lib (I am 99% certain it is). 
</span><br>
<p>YES to &quot;/lib = 64 bit libs and /lib32 has 32 bit&quot;.  There is also a 
<br>
/lib64-&gt;/lib symlink.
<br>
<p>Here is the requested verbose output:
<br>
$ cc -### -m32 hello.c
<br>
### cc: Note: NLSPATH = 
<br>
/opt/SS12u3/solarisstudio12.3/prod/bin/../lib/locale/%L/LC_MESSAGES/%N.cat:/opt/SS12u3/solarisstudio12.3/prod/bin/../../lib/locale/%L/LC_MESSAGES/%N.cat
<br>
###     command line files and options (expanded):
<br>
### -# -m32 hello.c
<br>
/opt/SS12u3/solarisstudio12.3/prod/bin/acomp -Qy -Xa -xc99=%all -i 
<br>
hello.c -D__SUNPRO_C=0x5120 -D__unix -D__unix__ -Dlinux -D__linux 
<br>
-D__linux__ -D__gnu__linux__ &quot;-D__builtin_expect(e,x)=e&quot; -D__i386 
<br>
-D__i386__ -D__BUILTIN_VA_ARG_INCR -D__C99FEATURES__ 
<br>
-D__PRAGMA_REDEFINE_EXTNAME -Dunix -Di386 -D__RESTRICT 
<br>
-D__FLT_EVAL_METHOD__=-1 -D__SUN_PREFETCH -D__NOVECTORSIZE__ -I-xbuiltin 
<br>
-I/opt/SS12u3/solarisstudio12.3/prod/lib/compilers/rtlibs/usr/include 
<br>
-I/opt/SS12u3/solarisstudio12.3/prod/include/cc -xbuiltin=%none 
<br>
-fsimple=0 -m32 -fparam_ir -xF=%none -xdbggen=no%stabs+dwarf2+usedonly 
<br>
-xdbggen=incl -xldscope=global -xivdep=loop -c99OS 
<br>
&quot;-g/opt/SS12u3/solarisstudio12.3/prod/bin/cc -m32 &quot; -destination_ir=yabe 
<br>
-y-fbe -y/opt/SS12u3/solarisstudio12.3/prod/bin/fbe -y-verbose -y-comdat 
<br>
-y-xarch=generic -y-comdat -y-xthreadvar=no%dynamic -y-xannotate=no -y-o 
<br>
-yhello.o -y-s
<br>
### cc: Note: LD_LIBRARY_PATH = (null)
<br>
### cc: Note: LD_RUN_PATH     = (null)
<br>
### cc: Note: LD_OPTIONS      = (null)
<br>
/usr/bin/ld -m elf_i386 -dynamic-linker /lib/ld-linux.so.2 
<br>
--enable-new-dtags /opt/SS12u3/solarisstudio12.3/prod/lib/crti.o 
<br>
/opt/SS12u3/solarisstudio12.3/prod/lib/crt1.o 
<br>
/opt/SS12u3/solarisstudio12.3/prod/lib/values-xa.o hello.o -o a.out -Y 
<br>
&quot;/opt/SS12u3/solarisstudio12.3/prod/lib:/lib32:/usr/lib32&quot; -Qy -lc 
<br>
/opt/SS12u3/solarisstudio12.3/prod/lib/libc_supp.a 
<br>
/opt/SS12u3/solarisstudio12.3/prod/lib/crtn.o
<br>
rm hello.o
<br>
<p>HOWEVER, in the failing build there was the following bit of output 
<br>
showing that the system linker is NOT being used:
<br>
CC: Warning: failed to detect system linker version, falling back to 
<br>
custom linker usage
<br>
<p><p><span class="quotelev1">&gt; Also, is this /lib is 64 bit libraries a common thing, none of my 
</span><br>
<span class="quotelev1">&gt; Linux systems are set up this way.
</span><br>
This appears to be the default on Ubuntu (checked 3 hosts with 2 
<br>
different releases).
<br>
<p>-Paul
<br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10342.php">Jeff Squyres: "[OMPI devel] Autotools update"</a>
<li><strong>Previous message:</strong> <a href="10340.php">TERRY DONTJE: "Re: [OMPI devel] 1.4.5rc5 has been released"</a>
<li><strong>In reply to:</strong> <a href="10339.php">TERRY DONTJE: "Re: [OMPI devel] 1.4.5rc5 has been released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10343.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc5 has been released"</a>
<li><strong>Reply:</strong> <a href="10343.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc5 has been released"</a>
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
