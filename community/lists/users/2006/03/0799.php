<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Mar  8 04:46:36 2006" -->
<!-- isoreceived="20060308094636" -->
<!-- sent="Wed, 08 Mar 2006 10:46:18 +0100" -->
<!-- isosent="20060308094618" -->
<!-- name="Pierre Valiron" -->
<!-- email="Pierre.Valiron_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11" -->
<!-- id="440EA7EA.9000205_at_obs.ujf-grenoble.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="529ABDDD-061B-4B6C-9073-18918DCFD8A3_at_open-mpi.org" -->
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
<strong>From:</strong> Pierre Valiron (<em>Pierre.Valiron_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-08 04:46:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0800.php">Brian Barrett: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<li><strong>Previous message:</strong> <a href="0798.php">Brignone, Sergio: "[OMPI users]  Spawn and Disconnect"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/02/0719.php">Brian Barrett: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0800.php">Brian Barrett: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<li><strong>Reply:</strong> <a href="0800.php">Brian Barrett: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the interruption. I back on mpi tracks again.
<br>
<p>I have rebuilt openmpi-1.0.2a9 with -g and the error is unchanged.
<br>
<p>I have also discovered that I don't need to run any openmpi application 
<br>
to show up the error.
<br>
<p>mpirun --help or mpirun show up the same error:
<br>
valiron_at_icare ~ &gt; mpirun
<br>
*Segmentation fault (core dumped)
<br>
<p>and
<br>
valiron_at_icare ~ &gt; pstack core
<br>
core 'core' of 13842:   mpirun
<br>
&nbsp;fffffd7ffee9dfe0 strlen () + 20
<br>
&nbsp;fffffd7ffeef6ab3 vsprintf () + 33
<br>
&nbsp;fffffd7fff180fd1 opal_vasprintf () + 41
<br>
&nbsp;fffffd7fff180f88 opal_asprintf () + 98
<br>
&nbsp;00000000004098a3 orterun () + 63
<br>
&nbsp;0000000000407214 main () + 34
<br>
&nbsp;000000000040708c ???????? ()
<br>
<p>Seems very basic !
<br>
<p>Using dbx produces a little more info, unfortunately cryptic for me:
<br>
<p>valiron_at_icare ~ &gt; dbx /users/valiron/lib/openmpi-1.0.2a9/bin/mpirun
<br>
For information about new features see `help changes'
<br>
To remove this message, put `dbxenv suppress_startup_message 7.5' in 
<br>
your .dbxrc
<br>
Reading mpirun
<br>
Reading ld.so.1
<br>
Reading liborte.so.0.0.0
<br>
Reading libopal.so.0.0.0
<br>
Reading libdl.so.1
<br>
Reading libm.so.2
<br>
Reading libnsl.so.1
<br>
Reading libsocket.so.1
<br>
Reading libthread.so.1
<br>
Reading libc.so.1
<br>
(dbx) run
<br>
Running: mpirun
<br>
(process id 13881)
<br>
t_at_1 (l_at_1) signal SEGV (no mapping at the fault address) in strlen at 
<br>
0xfffffd7ffee9dfe0
<br>
0xfffffd7ffee9dfe0: strlen+0x0020:      cmpb     $0x0000000000000000,(%rsi)
<br>
Current function is opal_vasprintf (optimized)
<br>
&nbsp;&nbsp;206       length = vsprintf(*ptr, fmt, ap);
<br>
(dbx)
<br>
<p>For information I copied the man page for vsprintf()
<br>
<p>Standard C Library Functions                          vprintf(3C)
<br>
<p>NAME
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vprintf, vfprintf, vsprintf,  vsnprintf  -  print  formatted
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;output of a variable argument list
<br>
<p>SYNOPSIS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#include &lt;stdio.h&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#include &lt;stdarg.h&gt;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int vprintf(const char *format, va_list ap);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int vfprintf(FILE *stream, const char *format, va_list ap);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int vsprintf(char *s, const char *format, va_list ap);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int vsnprintf(char *s, size_t n, const char *format, va_list
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ap);
<br>
<p>DESCRIPTION
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The vprintf(), vfprintf(), vsprintf() and vsnprintf()  func-
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tions  are  the  same as printf(), fprintf(), sprintf(), and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;snprintf(),  respectively,  except  that  instead  of  being
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;called  with a variable number of arguments, they are called
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;with an argument list as defined in the  &lt;stdarg.h&gt;  header.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;See printf(3C).
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The &lt;stdarg.h&gt; header defines the type va_list and a set  of
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;macros  for  advancing  through  a  list  of arguments whose
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;number and types may vary. The argument  ap  to  the  vprint
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;family  of  functions  is  of type va_list. This argument is
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;used with the  &lt;stdarg.h&gt;  header  file  macros  va_start(),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;va_arg(),  and  va_end()  (see  stdarg(3EXT)). The  EXAMPLES
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;section  below  demonstrates  the  use  of  va_start()   and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;va_end() with  vprintf().
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The macro va_alist() is used as  the  parameter  list  in  a
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;function  definition,  as in the function called  error() in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the example below.  The macro va_start(ap, parmN), where  ap
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;is  of  type  va_list  and  parmN is the rightmost parameter
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(just before ...), must be  called  before  any  attempt  to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;traverse   and   access   unnamed  arguments  is  made.  The
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;va_end(ap) macro must be invoked when all desired  arguments
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;have been accessed. The argument list in ap can be traversed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;again if va_start() is called again after va_end().  In  the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;example  below, the error() arguments (arg1,  arg2, ...) are
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;passed to vfprintf() in the argument ap.
<br>
<p>RETURN VALUES
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Refer to printf(3C).
<br>
<p>ERRORS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The vprintf() and vfprintf() functions will fail  if  either
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the stream is unbuffered or the stream's buffer needed to be
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;flushed and:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EFBIG           The file is a regular file  and  an  attempt
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;was  made  to  write at or beyond the offset
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;maximum.
<br>
<p><p><p>Any idea ?
<br>
<p>Of course I would be glad to provide an account to the machine (but for 
<br>
security reasons not on the list...).
<br>
<p>Pierre.
<br>
<p><p><p>Brian Barrett wrote:
<br>
<span class="quotelev1">&gt; On Feb 27, 2006, at 8:50 AM, Pierre Valiron wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; - Make completed nicely, excepted compiling ompi/mpi/f90/mpi.f90  
</span><br>
<span class="quotelev2">&gt;&gt; which took nearly half an hour to complete. I suspect the  
</span><br>
<span class="quotelev2">&gt;&gt; optimization flags in FFLAGS are not important for applications,  
</span><br>
<span class="quotelev2">&gt;&gt; and I could use -O0 or -O1 instead.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You probably won't see any performance impact at all if you compile  
</span><br>
<span class="quotelev1">&gt; the Fortran 90 layer of Open MPI with no optimizations.  It's a very  
</span><br>
<span class="quotelev1">&gt; thin wrapper and the compiler isn't going to be able to do much with  
</span><br>
<span class="quotelev1">&gt; it anyway.  One other thing - if you know your F90 code never sends  
</span><br>
<span class="quotelev1">&gt; arrays greater than dimension X (X defaults to 4), you can speed  
</span><br>
<span class="quotelev1">&gt; things up immensly by configuring Open MPI with the option --with-f90- 
</span><br>
<span class="quotelev1">&gt; max-array-dim=X.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; - However the resulting executable fails to launch:
</span><br>
<span class="quotelev2">&gt;&gt; valiron_at_icare ~/config &gt; mpirun --prefix /users/valiron/lib/ 
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.0.2a9 -np 2 a.out
</span><br>
<span class="quotelev2">&gt;&gt; Segmentation fault (core dumped)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - The problem seems buried into open-mpi:
</span><br>
<span class="quotelev2">&gt;&gt; valiron_at_icare ~/config &gt; pstack core
</span><br>
<span class="quotelev2">&gt;&gt; core 'core' of 27996:   mpirun --prefix /users/valiron/lib/ 
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.0.2a9 -np 2 a.out
</span><br>
<span class="quotelev2">&gt;&gt; fffffd7fff05dfe0 strlen () + 20
</span><br>
<span class="quotelev2">&gt;&gt; fffffd7fff0b6ab3 vsprintf () + 33
</span><br>
<span class="quotelev2">&gt;&gt; fffffd7fff2e4211 opal_vasprintf () + 41
</span><br>
<span class="quotelev2">&gt;&gt; fffffd7fff2e41c8 opal_asprintf () + 98
</span><br>
<span class="quotelev2">&gt;&gt; 00000000004098a3 orterun () + 63
</span><br>
<span class="quotelev2">&gt;&gt; 0000000000407214 main () + 34
</span><br>
<span class="quotelev2">&gt;&gt; 000000000040708c ???????? ()
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ugh...  Yes, we're probably doing something wrong there.   
</span><br>
<span class="quotelev1">&gt; Unfortunately, neither Jeff nor I have access to an Opteron box  
</span><br>
<span class="quotelev1">&gt; running Solaris and I can't replicate the problem on either a  
</span><br>
<span class="quotelev1">&gt; UltraSparc running Solaris or an Opteron running Linux.  Could you  
</span><br>
<span class="quotelev1">&gt; compile Open MPI with CFLAGS set to &quot;-g -O -xtarget=opteron - 
</span><br>
<span class="quotelev1">&gt; xarch=amd64&quot;.  Hopefully being able to see the callstack with some  
</span><br>
<span class="quotelev1">&gt; line numbers will help a bit.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><p><pre>
-- 
Soutenez le mouvement SAUVONS LA RECHERCHE :
<a href="http://recherche-en-danger.apinc.org/">http://recherche-en-danger.apinc.org/</a>
       _/_/_/_/    _/       _/       Dr. Pierre VALIRON
      _/     _/   _/      _/   Laboratoire d'Astrophysique
     _/     _/   _/     _/    Observatoire de Grenoble / UJF
    _/_/_/_/    _/    _/    BP 53  F-38041 Grenoble Cedex 9 (France)
   _/          _/   _/    <a href="http://www-laog.obs.ujf-grenoble.fr/~valiron/">http://www-laog.obs.ujf-grenoble.fr/~valiron/</a>
  _/          _/  _/     Mail: Pierre.Valiron_at_[hidden]
 _/          _/ _/      Phone: +33 4 7651 4787  Fax: +33 4 7644 8821
_/          _/_/        
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0800.php">Brian Barrett: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<li><strong>Previous message:</strong> <a href="0798.php">Brignone, Sergio: "[OMPI users]  Spawn and Disconnect"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/02/0719.php">Brian Barrett: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0800.php">Brian Barrett: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<li><strong>Reply:</strong> <a href="0800.php">Brian Barrett: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
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
