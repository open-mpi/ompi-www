<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep 21 21:18:21 2006" -->
<!-- isoreceived="20060922011821" -->
<!-- sent="Thu, 21 Sep 2006 21:16:55 -0400" -->
<!-- isosent="20060922011655" -->
<!-- name="Nuno Sucena Almeida" -->
<!-- email="slug_at_[hidden]" -->
<!-- subject="Re: [OMPI users] linux alpha ev6 openmpi 1.1.1" -->
<!-- id="200609212116.56211.slug_at_aeminium.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="084611C2-A242-433A-92B1-CCC8498EAAAB_at_open-mpi.org" -->
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
<strong>From:</strong> Nuno Sucena Almeida (<em>slug_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-21 21:16:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1889.php">alberto: "[OMPI users] OpenMPI(1.1.1) and Xgrid"</a>
<li><strong>Previous message:</strong> <a href="1887.php">Lydia Heck: "Re: [OMPI users] sed: command garbled:"</a>
<li><strong>In reply to:</strong> <a href="1880.php">Brian Barrett: "Re: [OMPI users] linux alpha ev6 openmpi 1.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1881.php">Brian Barrett: "Re: [OMPI users] linux alpha ev6 openmpi 1.1.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I got curious and checked it myself, and to my surprise the $31 had 
<br>
disappeared , so i searched a bit and realized that I need to add escape 
<br>
characters to $ because of m4, and so I did:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMPI_GCC_INLINE_ASSIGN='&quot;bis [$]31,[$]31,%0&quot; : &quot;=&amp;r&quot;(ret)'
<br>
<p><p>both to alpha-*)  and  alphaev6-*)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;but now, although configure reports that gcc supports inline assembly:
<br>
<p>checking if gcc supports GCC inline assembly... yes   &lt;----------
<br>
checking if gcc supports DEC inline assembly... no
<br>
checking if gcc supports XLC inline assembly... no
<br>
checking if g++ supports GCC inline assembly... yes &lt;----------
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;it says that it cannot generate atomic operations, since it lacks a 
<br>
ALPHA.asm:
<br>
<p>checking for pre-built assembly file... no (not in asm-data)
<br>
checking whether possible to generate assembly file... failed
<br>
configure: WARNING: Could not build atomic operations assembly file.
<br>
configure: WARNING: There will be no atomic operations for this build.
<br>
checking for atomic assembly filename... none
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;but it continues the configure process. 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I start compiling and I get another error:
<br>
<p><p>al_object.c  -fPIC -DPIC -o class/.libs/opal_object.o
<br>
opal_object.s: Assembler messages:
<br>
opal_object.s:445: Error: syntax error
<br>
opal_object.s:446: Error: bad expression
<br>
opal_object.s:446: Error: syntax error
<br>
opal_object.s:447: Error: bad expression
<br>
opal_object.s:447: Error: syntax error
<br>
opal_object.s:448: Error: bad expression
<br>
opal_object.s:448: Error: syntax error
<br>
opal_object.s:449: Error: syntax error
<br>
opal_object.s:450: Error: bad expression
<br>
opal_object.s:450: Error: syntax error
<br>
opal_object.s:451: Error: junk at end of line, first unrecognized character is 
<br>
`/'
<br>
opal_object.s:452: Error: bad expression
<br>
opal_object.s:452: Error: syntax error
<br>
opal_object.s:522: Error: syntax error
<br>
opal_object.s:523: Error: bad expression
<br>
opal_object.s:523: Error: syntax error
<br>
opal_object.s:524: Error: bad expression
<br>
opal_object.s:524: Error: syntax error
<br>
opal_object.s:525: Error: bad expression
<br>
opal_object.s:525: Error: syntax error
<br>
opal_object.s:526: Error: syntax error
<br>
opal_object.s:527: Error: bad expression
<br>
opal_object.s:527: Error: syntax error
<br>
opal_object.s:528: Error: junk at end of line, first unrecognized character is 
<br>
`/'
<br>
opal_object.s:529: Error: bad expression
<br>
opal_object.s:529: Error: syntax error
<br>
make[2]: *** [class/opal_object.lo] Error 1
<br>
make[2]: Leaving directory `/usr/src/mpi/openmpi-1.1.1/opal'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/usr/src/mpi/openmpi-1.1.1/opal'
<br>
make: *** [all-recursive] Error 1
<br>
(...)
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;, but beware that I'm using the gcc flag '-save-temps' to check where the 
<br>
problem was:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;make CFLAGS=-save-temps
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;so I started searching where that macro might come from and ended up in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal/include/opal/sys/alpha/atomic.h
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I took out the extra //  comments in the asm code from
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'opal_atomic_cmpset_32' and opal_atomic_cmpset_64'  which seemed to fix that 
<br>
problem and restarted the compilation and after some more compiling it bombed 
<br>
out in:
<br>
<p>(...)
<br>
then mv -f &quot;$depbase.Tpo&quot; &quot;$depbase.Plo&quot;; else rm -f &quot;$depbase.Tpo&quot;; exit 1; 
<br>
fi
<br>
gcc -DHAVE_CONFIG_H -I. -I. -I../opal/include -I../orte/include -I../ompi/include -I../ompi/include -I.. -save-temps -MT 
<br>
class/opal_object.lo -MD -MP -MF class/.deps/opal_object.Tpo -c 
<br>
class/opal_object.c  -fPIC -DPIC -o class/.libs/opal_object.o
<br>
opal_object.s: Assembler messages:
<br>
opal_object.s:734: Error: can't resolve `.rodata' {.rodata section} - `L0' 
<br>
{.text section}
<br>
opal_object.s:734: Error: can't resolve `.text' {.text section} - `L0' 
<br>
{.rodata section}
<br>
make[2]: *** [class/opal_object.lo] Error 1
<br>
make[2]: Leaving directory `/usr/src/mpi/openmpi-1.1.1/opal'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/usr/src/mpi/openmpi-1.1.1/opal'
<br>
make: *** [all-recursive] Error 1
<br>
(...)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and here I got stuck :)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I send my config.log in the attachment, with just the bis [$]31 modification
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Regards,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nuno
<br>
<p><p><p><p>On Sunday 17 September 2006 19:01, Brian Barrett wrote:
<br>
<span class="quotelev2">&gt; &gt; (...)
</span><br>
<span class="quotelev2">&gt; &gt; gcc -O3 -DNDEBUG -fno-strict-aliasing -pthread -o .libs/opal_wrapper
</span><br>
<span class="quotelev2">&gt; &gt; opal_wrapper.o -Wl,--export-dynamic  ../../../opal/.libs/libopal.so
</span><br>
<span class="quotelev2">&gt; &gt; -ldl -lnsl -lutil -lm -Wl,--rpath -Wl,/opt/openmpi-1.1.1/lib
</span><br>
<span class="quotelev2">&gt; &gt; ../../../opal/.libs/libopal.so: undefined reference to
</span><br>
<span class="quotelev2">&gt; &gt; `opal_atomic_cmpset_acq_32'
</span><br>
<span class="quotelev2">&gt; &gt; ../../../opal/.libs/libopal.so: undefined reference to
</span><br>
<span class="quotelev2">&gt; &gt; `opal_atomic_cmpset_32'
</span><br>
<span class="quotelev2">&gt; &gt; (...)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you send the config.log file generated by Open MPI's configure,
</span><br>
<span class="quotelev1">&gt; with your bis $31,$31 change?
</span><br>
<p><pre>
-- 
<a href="http://aeminium.org/slug/">http://aeminium.org/slug/</a>
*****************************************************************************
**                                                                         **
** WARNING:  This email contains an attachment of a very suspicious type.  **
** You are urged NOT to open this attachment unless you are absolutely     **
** sure it is legitimate.  Opening this attachment may cause irreparable    **
** damage to your computer and your files.  If you have any questions      **
** about the validity of this message, PLEASE SEEK HELP BEFORE OPENING IT. **
**                                                                         **
** This warning was added by the IU Computer Science Dept. mail scanner.   **
*****************************************************************************

</pre>
<hr>
<ul>
<li>application/x-zip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1888/bis-alpha-config.log.zip">bis-alpha-config.log.zip</a>
</ul>
<!-- attachment="bis-alpha-config.log.zip" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1889.php">alberto: "[OMPI users] OpenMPI(1.1.1) and Xgrid"</a>
<li><strong>Previous message:</strong> <a href="1887.php">Lydia Heck: "Re: [OMPI users] sed: command garbled:"</a>
<li><strong>In reply to:</strong> <a href="1880.php">Brian Barrett: "Re: [OMPI users] linux alpha ev6 openmpi 1.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1881.php">Brian Barrett: "Re: [OMPI users] linux alpha ev6 openmpi 1.1.1"</a>
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
