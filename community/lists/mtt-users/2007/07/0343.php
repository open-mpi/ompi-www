<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul  6 13:21:20 2007" -->
<!-- isoreceived="20070706172120" -->
<!-- sent="Fri, 6 Jul 2007 13:22:06 -0400" -->
<!-- isosent="20070706172206" -->
<!-- name="Joshua Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="[MTT users] Perl Wrap Error" -->
<!-- id="62DF58D7-B18D-4392-97A6-54D3484552FC_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Joshua Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-06 13:22:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0344.php">Ethan Mallove: "Re: [MTT users] Perl Wrap Error"</a>
<li><strong>Previous message:</strong> <a href="0342.php">Ethan Mallove: "Re: [MTT users] Database insert errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0344.php">Ethan Mallove: "Re: [MTT users] Perl Wrap Error"</a>
<li><strong>Reply:</strong> <a href="0344.php">Ethan Mallove: "Re: [MTT users] Perl Wrap Error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Anyone seen the following error from MTT before? It looks like it is  
<br>
in the reporter stage.
<br>
<p>&lt;-------------------------&gt;
<br>
shell$ /spin/home/jjhursey/testing/mtt//client/mtt --mpi-install  -- 
<br>
scratch /spin/home/jjhursey/testing/scratch/20070706 --file /spin/ 
<br>
home/jjhursey/testing/etc/jaguar/simple-svn.ini --print-time -- 
<br>
verbose --debug 2&gt;&amp;1 1&gt;&gt; /spin/home/jjhursey/testing/scratch/20070706/ 
<br>
output.txt
<br>
This shouldn't happen at /usr/lib/perl5/5.8.3/Text/Wrap.pm line 64.
<br>
shell$
<br>
&lt;-------------------------&gt;
<br>
<p>The return code is: 6400
<br>
<p>I attached the output log incase that helps, and the INI file.
<br>
<p>-- Josh
<br>
<p>

<br><p>
<p><pre>
----
Josh Hursey
jjhursey_at_[hidden]
<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/mtt-users/att-0343/jjhursey-mtt.tar.bz2">jjhursey-mtt.tar.bz2</a>
</ul>
<!-- attachment="jjhursey-mtt.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0344.php">Ethan Mallove: "Re: [MTT users] Perl Wrap Error"</a>
<li><strong>Previous message:</strong> <a href="0342.php">Ethan Mallove: "Re: [MTT users] Database insert errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0344.php">Ethan Mallove: "Re: [MTT users] Perl Wrap Error"</a>
<li><strong>Reply:</strong> <a href="0344.php">Ethan Mallove: "Re: [MTT users] Perl Wrap Error"</a>
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
